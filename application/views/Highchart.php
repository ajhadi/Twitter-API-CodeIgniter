<script src="<?php echo base_url() ?>assets/js/highcharts.js"></script>
<script src="<?php echo base_url() ?>assets/js/highcharts-3d.js"></script>
<script src="<?php echo base_url() ?>assets/js/modules/exporting.js"></script>

<div id="<?php echo $chart_name ?>" style="min-width: auto; height: <?php echo $height; ?>px; margin: 0 auto"></div>

<script type="text/javascript">    
Highcharts.chart('users', {

    chart: {
        type: 'column',
        backgroundColor: '',
        color: '#fff',
    },
    title: false,
    credits : false,
    exporting: false,

    xAxis: false,
    yAxis: {
        min: 0,
        title:false,
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: '<b>{point.y} </b> Activity'
    },
    series: [{
        name: 'Acitivity',
        data: [
            ['January', <?php echo $user_month_1;?>],
            ['February', <?php echo $user_month_2;?>],
            ['March', <?php echo $user_month_3;?>],
            ['April', <?php echo $user_month_4;?>],
            ['May', <?php echo $user_month_5;?>],
            ['June', <?php echo $user_month_6;?>],
            ['July', <?php echo $user_month_7;?>],
            ['August', <?php echo $user_month_8;?>],
            ['September', <?php echo $user_month_9;?>],
            ['October', <?php echo $user_month_10;?>],
            ['November', <?php echo $user_month_11;?>],
            ['December', <?php echo $user_month_12;?>]
        ],
        dataLabels: false,

    }]
});
</script>

<script type="text/javascript">    
Highcharts.chart('accounts', {

    chart: {
        type: 'column',
        backgroundColor: '',
    },
    title: false,
    credits : false,
    exporting: false,

    xAxis: false,
    yAxis: {
        min: 0,
        title:false,
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: '<b>{point.y} </b> Activity'
    },
    series: [{
        name: 'Acitivity',
        data: [
            ['January', <?php echo $account_month_1;?>],
            ['February', <?php echo $account_month_2;?>],
            ['March', <?php echo $account_month_3;?>],
            ['April', <?php echo $account_month_4;?>],
            ['May', <?php echo $account_month_5;?>],
            ['June', <?php echo $account_month_6;?>],
            ['July', <?php echo $account_month_7;?>],
            ['August', <?php echo $account_month_8;?>],
            ['September', <?php echo $account_month_9;?>],
            ['October', <?php echo $account_month_10;?>],
            ['November', <?php echo $account_month_11;?>],
            ['December', <?php echo $account_month_12;?>]
        ],
        dataLabels: false

    }]
});
</script>



<script type="text/javascript">    
Highcharts.chart('acc', {

    chart: {
        type: 'column',
        backgroundColor: '',
    },
    title: false,
    credits : false,
    exporting: false,

    xAxis: false,
    yAxis: {
        min: 0,
        title:false,
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: '<b>{point.y} </b> Activity'
    },
    series: [{
        name: 'Acitivity',
        data: [
            ['January', <?php echo $month_1;?>],
            ['February', <?php echo $month_2;?>],
            ['March', <?php echo $month_3;?>],
            ['April', <?php echo $month_4;?>],
            ['May', <?php echo $month_5;?>],
            ['June', <?php echo $month_6;?>],
            ['July', <?php echo $month_7;?>],
            ['August', <?php echo $month_8;?>],
            ['September', <?php echo $month_9;?>],
            ['October', <?php echo $month_10;?>],
            ['November', <?php echo $month_11;?>],
            ['December', <?php echo $month_12;?>]
        ],
        dataLabels: false

    }]
});
</script>




<script type="text/javascript">

Highcharts.chart('user', {
    credits:false,
    chart: {
        backgroundColor : false,
        type: 'column',
        options3d: {
            enabled: true,
            alpha: 10,
            beta: 25,
            depth: 70
        }
    },
    title: {
        text: 'A C T I V I T Y'
    },
    subtitle: false,
    plotOptions: {
        column: {
            depth: 25
        }
    },
    xAxis: {
        categories: Highcharts.getOptions().lang.shortMonths,
        labels: {
            skew3d: true,
            style: {
                fontSize: '16px'
            }
        }
    },
    yAxis: {
        title: {
            text: null
        }
    },
    series: [{
        name: 'Acitivity',
        data: [<?php echo $month_1.','.$month_2.','.$month_3.','.$month_4.','.$month_5.','.$month_6.','.$month_7.','.$month_8.','.$month_9.','.$month_10.','.$month_11.','.$month_12.',' ?>]
    }]
});
</script>

