<script src="https://www.gstatic.com/charts/loader.js"></script>
<div class="row">
    <div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>

<script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

    // Set Data
    const data = google.visualization.arrayToDataTable([
        
        ['Danh mục', 'Số lượng sản phẩm'],
        <?php 
            $tongdm = count($list);
            $i = 1;
            foreach ($list as $b){
                extract($b);
                if($i == $tongdm) $dauphay = ""; else $dauphay = ",";
                echo "['".$b['tendm']."', ".$b['soluong']."]".$dauphay;
                $i+=1;
            }
        ?>
    ]);
    // Set Options
    const options = {
        title:'Thống kê sản phẩm theo danh mục',
        is3D:true
    };

    // Draw
    const chart = new google.visualization.PieChart(document.getElementById('myChart'));
    chart.draw(data, options);

    }
</script>
</div>