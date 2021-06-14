<?php 
$connect = mysqli_connect('localhost','root','','coronavirus');
$setQuery = mysqli_query($connect, "SELECT timeDate, positive, death, recovered, active, p_high, d_high, r_high, a_high FROM global_corona");
$SetQueryindo = mysqli_query($connect, "SELECT indoTime, id_positive, id_death, id_recovered, id_active, id_high_p, id_high_d, id_high_r, id_high_a FROM indonesia_corona");


//Create database and query JSON
while ($system = mysqli_fetch_array($setQuery)) {
    $setTimedate[] = date('d M Y', strtotime($system['timeDate']));

    $positive[] = $system['positive'];
    $death[] = $system['death'];
    $recovered[] = $system['recovered'];
    $active[] = $system['active'];

    $p_high[] = $system['p_high']; 
    $d_high[] = $system['d_high'];
    $r_high[] = $system['r_high'];
    $a_high[] = $system['a_high'];

}

//New database and query JSON
while ($idn = mysqli_fetch_array($SetQueryindo)) {
    $SetTime[] = date('d M Y', strtotime($idn['indoTime']));

    $id_positive[] = $idn['id_positive'];
    $id_death[] = $idn['id_death'];
    $id_recovered[] = $idn['id_recovered'];
    $id_active[] = $idn['id_active'];

    $id_high_p[] = $idn['id_high_p'];
    $id_high_d[] = $idn['id_high_d'];
    $id_high_r[] = $idn['id_high_r'];
    $id_high_a[] = $idn['id_high_a'];
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sebaran COVID-19</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <!-- JS, Popper.js, and jQuery -->
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--CSS only-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
</head>
<body>
<div class="container">
<h1 class="text-white text-center" style="margin-top: 3rem;">Informasi Grafik</h1>
            <hr class="border-info">
            <details class="text-white" id="redirectchart">
                <br>
                <summary class="text-center bg-dark rounded-sm">Grafik Coronavirus</summary>
                <div class="Canvas">
                    <h2>Grafik global</h2>
                    <canvas id="myChart" class="rowered"></canvas>
                </div>
                <br><br><br><br>
                <div class="Canvas">
                <canvas id="myChart-data" class="rowered"></canvas>
                </div>
                <br><br><br>
                <div class="Canvas">
                    <h2>Grafik indonesia</h2>
                    <canvas id="chart-ID" class="rowered"></canvas>
                </div>
                <br><br><br><br>
                <div class="Canvas">
                    <canvas id="chart-ID-add" class="rowered"></canvas>
                    <a onclick="dataStats();" class="text-primary ">Sarankan pengeditan dan pembaharuan</a>
                </div>
            </details>
</div>
</body>
<style>
         /*Canvas*/
         .Canvas h2{
                text-align: center;
                font-size: 45px;
            }
            .Canvas{
                width: 100%;
                height: 85vh;
            }
            .rowered{
                text-align: center;
                box-shadow: 0px 10px 20px #000000;
                background: #1a1a1a;
                border-radius: 10px;
                margin: 50px 0px;
            }
            #alertReport{
                display: none;
            }
            /*Phone using Desktop Version*/
            @media(max-width: 1030px){ 
                .Canvas{
                    width: 100%; 
                    height: 30vh;
                }
            }

            /*Phone Responsive*/
            @media(max-width: 780px){
                .Canvas{
                    width: 100%; 
                    height: 130vmin;
                }
            }
</style>
<script>
             //setConfigGlobal
             Chart.defaults.global.defaultFontSize = 15;

var ctx = document.getElementById("myChart").getContext("2d");
  
var chart = new Chart (ctx, {
    //tipe char
    type: 'line',
    //output data
    data: {
        labels: <?php echo json_encode($setTimedate); ?>,
        //setAtributte
        datasets: [{
            label: 'Total Pasien Positif',
            backgroundColor:'transparent',
            borderColor: '#fce308',
            fontSize: '30',
            borderWidth: '5',
            hitRadius: '2',
            hoverBorderWidth: '10',
            data: <?php echo json_encode($positive);?>
        }, {
            label: 'Total Pasien Meninggal',
            backgroundColor: 'transparent',
            borderColor: '#fc4108',
            borderWidth: '5',
            hitRadius: '2',
            hoverBorderWidth: '10',
            data: <?php echo json_encode($death);?>

        }, {
            label: 'Total Pasien Sembuh',
            backgroundColor: 'transparent',
            borderColor: '#08fcab',
            borderWidth: '5',
            hitRadius: '2',
            hoverBorderWidth: '10',
            data: <?php echo json_encode($recovered);?>
        }, {
            label: 'Total Pasien dirawat',
            backgroundColor: 'transparent',
            borderColor: '#7929fa',
            borderWidth: '5',
            hitRadius: '2',
            hoverBorderWidth: '10',
            data: <?php echo json_encode($active);?>
        }]
    },

    //Konfigurasi pengaturan
    options: {
        responsive: true,
        maintainAspectRatio: false,
        title: {
            display: true,
            text: 'Global',
            fontColor: 'white',
            fontSize: '26'
        },
        tooltips: {
            callbacks: {
                label: function(tooltipItem , data) {
                    return tooltipItem.yLabel.toLocaleString('en-US').replace(/\d(?=(\d{3})+\.)/g, '$&.');
                }
            },
            //Execution all Point = index perfect
            mode: 'index',
            axis: 'y',
            titleFontFamily: 'Arial, Helvetica, sans-serif',
            titleFontColor: '#00ff00',  
        },
        
        legend: {
            labels: {
                //bagian atas bar
                fontColor: 'white',

                
            }
        }
    }
    
}) 


var cxt = document.getElementById("myChart-data").getContext("2d");

var chart = new Chart(cxt, {
type: 'line',
data: {
    labels: <?php echo json_encode($setTimedate); ?>,

    datasets: [{
        label: 'Positif Tertinggi',
        borderColor: '#fce308',
        borderWidth: '5',
        backgroundColor: 'transparent',
        hitRadius: '2',
        hoverBorderWidth: '10',
        data: <?php echo json_encode($p_high); ?>
    }, {
        label: 'Meninggal Tertinggi',
        borderColor: '#fc4108',
        backgroundColor: 'transparent',
        borderWidth: '5',
        hitRadius: '2',
        hoverBorderWidth: '10',
        data: <?php echo json_encode($d_high); ?>

    }, {
        label: 'Pemulihan Tertinggi',
        borderColor: '#08fcab',
        backgroundColor: 'transparent',
        borderWidth: '5',
        hitRadius: '2',
        hoverBorderWidth: '10',
        data: <?php echo json_encode($r_high); ?>
    }, {
        label: 'Dirawat Tertinggi',
        borderColor: '#7929fa',
        backgroundColor: 'transparent',
        borderWidth: '5',
        hitRadius: '2',
        hoverBorderWidth: '10',
        data: <?php echo json_encode($a_high); ?>
    }]
},
options: {
    responsive: true,
        maintainAspectRatio: false,
    title: {
        display: true,
        text: ' Tertinggi Terakhir',
        fontColor: 'white',
        fontSize: '26'
    },
    tooltips: {
            callbacks: {
                label: function(tooltipItem , data) {
                    return tooltipItem.yLabel.toLocaleString('en-US').replace(/\d(?=(\d{3})+\.)/g, '$&.');
                }
            },
            //Execution all Point = index perfect
            mode: 'index',
            axis: 'y',
            titleFontFamily: 'Arial, Helvetica, sans-serif',
            titleFontColor: '#00ff00',  
        },
    legend: {
        labels: {
            fontColor: 'white',
        }
    }
}
})



//Indonesia Chart COVID-19
var newCtx = document.getElementById("chart-ID").getContext("2d");

var chart = new Chart(newCtx, {
  type: 'line',
  data: {
    labels: <?php echo json_encode($SetTime); ?>,
      datasets: [{
          label: 'Total Positif',
          backgroundColor: 'transparent',
          borderColor: '#fce308',
          borderWidth: '5',
          hitRadius: '2',
          hoverBorderWidth: '10',
          data: <?php echo json_encode($id_positive); ?>
      }, {
          label: 'Total Meninggal',
          backgroundColor: 'transparent',
          borderColor: '#fc4108',
          borderWidth: '5',
          hitRadius: '2',
          hoverBorderWidth: '10',
          data: <?php echo json_encode($id_death); ?>
      }, {
          label: 'Total Pemulihan',
          backgroundColor: 'transparent',
          borderColor: '#08fcab',
          borderWidth: '5',
          hitRadius: '2',
          hoverBorderWidth: '10',
          data: <?php echo json_encode($id_recovered); ?>

      }, {
          label: 'Total Pasien Dirawat',
          backgroundColor: 'transparent',
          borderColor: '#7929fa',
          borderWidth: '5',
          hitRadius: '2',
          hoverBorderWidth: '10',
          data: <?php echo json_encode($id_active); ?>
      }]
  },
  options: {
    responsive: true,
        maintainAspectRatio: false,
      title: {
          display: true,
          text: 'Indonesia',
          titleFontFamily: 'Arial, Helvetica, sans-serif',
          fontSize: '26',
          fontColor: 'white',
      },
      tooltips: {
            callbacks: {
                label: function(tooltipItem , data) {
                    return tooltipItem.yLabel.toLocaleString('en-US').replace(/\d(?=(\d{3})+\.)/g, '$&.');
                }
            },
            //Execution all Point = index perfect
            mode: 'index',
            axis: 'y',
            titleFontFamily: 'Arial, Helvetica, sans-serif',
            titleFontColor: '#00ff00',  
        },
      legend: {
        labels: {
            fontColor: 'white',
        }
      }
  }
})




var ctxs = document.getElementById("chart-ID-add").getContext("2d");

var chart = new Chart(ctxs, {
  type: 'line',
  data: {
    labels: <?php echo json_encode($SetTime) ?>,
      
      datasets: [{
          label: 'Positif Tertinggi',
          backgroundColor: 'transparent',
          borderColor: '#fce308',
          borderWidth: '5',
          hitRadius: '2',
          hoverBorderWidth: '10',
          data: <?php echo json_encode($id_high_p); ?>
      }, {
          label: 'Meninggal Tertinggi',
          backgroundColor: 'transparent',
          borderColor: '#fc4108',
          borderWidth: '5',
          hitRadius: '2',
          hoverBorderWidth: '10',
          data: <?php echo json_encode($id_high_d); ?>
      }, {
          label: 'Pemulihan Tertinggi',
          backgroundColor: 'transparent',
          borderColor: '#08fcab',
          borderWidth: '5',
          hitRadius: '2',
          hoverBorderWidth: '10',
          data: <?php echo json_encode($id_high_r); ?>
      }, {
          label: 'Dirawat Tertinggi',
          backgroundColor: 'transparent',
          borderColor: '#7929fa',
          borderWidth: '5',
          hitRadius: '2',
          hoverBorderWidth: '10',
          data: <?php echo json_encode($id_high_a); ?>
      }]
  },
  options: {
    responsive: true,
        maintainAspectRatio: false,
      title: {
        display: true,
        text: 'Tertinggi Terakhir',
        fontSize: '26',
        fontFamily: 'Arial, Helvetica, sans-serif',
        fontColor: 'white',
      },
      tooltips: {
            callbacks: {
                label: function(tooltipItem , data) {
                    return tooltipItem.yLabel.toLocaleString('en-US').replace(/\d(?=(\d{3})+\.)/g, '$&.');
                }
            },
            //Execution all Point = index perfect
            mode: 'index',
            axis: 'y',
            titleFontFamily: 'Arial, Helvetica, sans-serif',
            titleFontColor: '#00ff00',  
        },
      legend: {
          labels: {
              fontColor: 'white',
          }
      }
  }
})

</script>