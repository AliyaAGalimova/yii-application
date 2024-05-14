<?php

/** @var yii\web\View $this */

$this->title = 'My Library';
?>
<div class="site-index">
    <div class="p-5 mb-4 bg-transparent rounded-3">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-4">Online library</h1>
            <p class="fs-5 fw-light">Free access to thousands of books</p>
            <p><a class="btn btn-lg btn-success" href="index?r=book/index">Choose one</a></p>
        </div>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-12 py-5 text-center text-success">
                <h1>New releases</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <h3>Master and Margarita</h3>

                <p>At the sunset hour of one warm spring day two men were to be seen at Patriarch's Ponds...</p>

            </div>
            <div class="col-lg-4">
                <h3>The Twelve Chairs</h3>

                <p>The mother-in-law of a former nobleman named Vorobyaninov discloses on her deathbed a secret: she hid her diamonds in one of the family's chairs ...</p>
            </div>
            <div class="col-lg-4">
                <h3>The old man and the sea</h3>

                <p>He was an old man who fished alone in a skiff in the Gulf Stream and he had gone eighty-four days now without taking a fish.</p>
            </div>
        </div>

    </div>
</div>
