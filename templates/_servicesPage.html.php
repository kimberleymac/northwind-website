<h2>Our services</h2>

<p> Here is some information about some of our services that are on offer </p>

<?php if(empty($services)): ?>
    <!-- No services -->
     <p>Sorry no serivices available</p>

<?php else: ?>

    <dl class="service-list">
        <!-- Start of loop -->
        <?php foreach($services as $serviceName => $serviceDescription): ?>
        <dt><?= $serviceName ?></dt>
        <dd><?= $serviceDescription ?></dd>
        <?php endforeach ?>
        <!-- End of loop -->
    </dl>

<?php endif ?>
