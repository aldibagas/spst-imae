<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
                      
    Morris.Bar({
    element : 'chart',
    data:[<?php echo $chart_data; ?>],
    xkey:'tanggal',
    ykeys:['uangmasuk','uangkeluar'],
    labels:['uangmasuk','uangkeluar'],
    hideHover:'auto',

    });
</script>