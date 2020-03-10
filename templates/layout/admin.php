<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>

        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.4.1/lux/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.min.css">

    <style>
        .fade-enter-active,
        .fade-leave-active {
            transition: opacity 1.5s;
        }
        .fade-enter,
        .fade-leave-to/* .fade-leave-active below version 2.1.8 */
        {
            opacity: 0;
        }
    </style>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

</head>
<body>
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">Service Pins</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Edit "About"</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Registrations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ministries</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Dates</a>
            </li>
        </ul>
    </div>
</nav>



<main class="main">
    <div class="container">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
</main>
<footer>
</footer>
<script crossorigin="anonymous" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script crossorigin="anonymous" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script crossorigin="anonymous" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.0/smooth-scroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>





<script>
    $('')

    Vue.config.devtools = true;
    Vue.config.silent = false;

    var app = new Vue({
        el: "#app",
        data: {
            milestone: 0,
            ministry: '',
            employee_number: '',
            first_name: '',
            last_name: '',
            department: '',
            office_careof: '',
            office_suite: '',
            office_address: '',
            office_city: '',
            office_city_id: '',
            office_postal_code: '',
            office_po_box: '',
            supervisor_first_name: '',
            supervisor_last_name: '',
            supervisor_careof: '',
            supervisor_suite: '',
            supervisor_address: '',
            supervisor_city: '',
            supervisor_city_id: '',
            supervisor_po_box: '',
            supervisor_postal_code: '',
            identifyingInfoExists: false,
            recipientInVictoria: false,
            supervisorInVictoria: false,
            milestoneAndMinistryPicked: false,
            recipientAddressExists: false,
            supervisorAddressExists: false,
        },
        methods: {
            checkIdentifyingInfoExists: function () {
                if (this.first_name.length > 1 && this.last_name.length > 1) {
                    if (this.employee_number.length > 5 && this.department.length > 1) {
                        this.identifyingInfoExists = true;
                    }
                }

            },
            checkOfficeInfoExists: function() {
                if (this.office_address.length > 5 && this.office_city > 2) {
                    if (this.office_postal_code > 5) {
                        if (this.recipientInVictoria && this.office_po_box.length > 3) {
                            this.recipientAddressExists = true;
                        }
                        if (!this.recipientInVictoria) {
                            this.recipientAddressExists = true;
                        }
                    }
                }
            },
            checkSupervisorInfoExists: function () {
                if (this.supervisor_first_name.length > 1 && this.supervisor_last_name > 1) {
                    if (this.supervisor_address.length > 5 && this.supervisor_city > 2) {
                        if (this.supervisor_postal_code > 5) {
                            if (this.supervisorInVictoria && this.supervisor_po_box.length > 3) {
                                this.supervisorAddressExists = true;
                            }
                            if (!this.supervisorInVictoria) {
                                this.supervisorAddressExists = true;
                            }
                        }
                    }
                }
            },
            checkMilestoneAndMinistry: function() {

                //TODO: compare ministry selected against list for retroactive
                if (!this.ministry && this.milestone > 0) {
                    this.milestoneAndMinistryPicked = true;
                }
            }


        }
    });
    $('#office-city-select').selectize({
        onChange: function(value) {
            app.office_city_id =  value;
            app.office_city = $('#office-city-select option:selected').text();
            if (value == 1997) {
                app.recipientInVictoria = true;
            }
        }
    });

    $('#supervisor-city-select').selectize({
        onChange: function(value) {
            app.supervisor_city_id = value;
            app.supervisor_city = $('#supervisor-city-select option:selected').text();
            if (value == 1997) {
                app.supervisorInVictoria = true;
            }
        }
    });

    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1500
    });

    $(document).ready(function() {
        $('.data-table').DataTable();
    } );

</script>
</body>
</html>
