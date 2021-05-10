<?php $__env->startSection('title', 'Kontrol Paneli'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="page-header">Kontrol Paneli</h1>

    <section class="row text-center placeholders">
        <div class="col-6 col-sm-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Bekleyen Sipariş</div>
                <div class="panel-body">
                    <h4><?php echo e($istatistikler['bekleyen_siparis']); ?></h4>
                    <p>adet</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Tamamlanan Sipariş</div>
                <div class="panel-body">
                    <h4><?php echo e($istatistikler['tamamlanan_siparis']); ?></h4>
                    <p>adet</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Ürün</div>
                <div class="panel-body">
                    <h4><?php echo e($istatistikler['toplam_urun']); ?></h4>
                    <p>adet</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Kullanıcı</div>
                <div class="panel-body">
                    <h4><?php echo e($istatistikler['toplam_kullanici']); ?></h4>
                    <p>kişi</p>
                </div>
            </div>
        </div>
    </section>

    <section class="row">
        <div class="col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Çok Satan Ürünler</div>
                <div class="panel-body">
                    <canvas id="chartCokSatan"></canvas>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Aylara Göre Satışlar</div>
                <div class="panel-body">
                    <canvas id="chartAylaraGoreSatislar"></canvas>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <script>
        <?php
            $labels = "";
            $data = "";
            foreach($cok_satan_urunler as $rapor) {
                $labels .= "\"$rapor->urun_adi\", ";
                $data .= "$rapor->adet, ";
            }
        ?>
        var ctx1 = document.getElementById("chartCokSatan").getContext('2d');
        var chartCokSatan = new Chart(ctx1, {
            type: 'horizontalBar',
            data: {
                labels: [<?php echo $labels; ?>],
                datasets: [{
                    label: 'Çok Satan Ürünler',
                    data: [<?php echo $data; ?>],
                    borderColor: '#f4645f',
                    borderWidth: 1
                }]
            },
            options: {
                legend: {
                    position: 'bottom',
                    display: false
                },
                scales: {
                    xAxes: [{
                        ticks: {
                            beginAtZero: true,
                            stepSize: 1
                        }
                    }]
                }
            }
        });
        <?php
            $labels = "";
            $data = "";
            foreach($aylara_gore_satislar as $rapor) {
                $labels .= "\"$rapor->ay\", ";
                $data .= "$rapor->adet, ";
            }
        ?>
        var ctx2 = document.getElementById("chartAylaraGoreSatislar").getContext('2d');
        var chartAylaraGoreSatislar = new Chart(ctx2, {
            type: 'line',
            data: {
                labels: [<?php echo $labels; ?>],
                datasets: [{
                    label: 'Aylara Göre Satışlar',
                    data: [<?php echo $data; ?>],
                    borderColor: '#f4645f',
                    borderWidth: 1
                }]
            },
            options: {
                legend: {
                    position: 'bottom'
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            stepSize: 1
                        }
                    }]
                }
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('yonetim.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Courses\laravelecommerce\Project\resources\views/yonetim/anasayfa.blade.php ENDPATH**/ ?>