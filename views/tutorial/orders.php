<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutorial-orders">
    <h1><?= Html::encode($this->title) ?></h1>

<div class="container articles">
	<div class="row">
    	<div class="col-md-12">

			<!-- create order -->
			<div class="panel panel-default">
		        <div class="panel-body"> 
		            <div class="col-md-2">
                        <a href="#">
                            <img src="/web/img/youtube.png">
                        </a>
                    </div>
		            <div class="col-md-10">
		                <h3>Регистрация заказа</h3>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore obcaecati eveniet ipsa quia vero tempore delectus dignissimos voluptates illo explicabo consequatur ducimus, dolores, nostrum voluptatem eligendi dolore ipsum recusandae inventore!</p>
		            </div>
		        </div>
		    </div>
			
			<!-- edit order -->
		    <div class="panel panel-default">
		        <div class="panel-body"> 
		           <div class="col-md-2">
                        <a href="#">
                            <img src="/web/img/youtube.png">
                        </a>
                    </div>
		            <div class="col-md-10">
		                <h3>Редактирование заказа</h3>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore obcaecati eveniet ipsa quia vero tempore delectus dignissimos voluptates illo explicabo consequatur ducimus, dolores, nostrum voluptatem eligendi dolore ipsum recusandae inventore!</p>
		            </div>
		        </div>
		    </div>

		    <!-- delete order -->
		    <div class="panel panel-default">
		        <div class="panel-body"> 
		            <div class="col-md-2">
                        <a href="#">
                            <img src="/web/img/youtube.png">
                        </a>
                    </div>
		            <div class="col-md-10">
		                <h3>Удаление заказа</h3>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore obcaecati eveniet ipsa quia vero tempore delectus dignissimos voluptates illo explicabo consequatur ducimus, dolores, nostrum voluptatem eligendi dolore ipsum recusandae inventore!</p>
		            </div>
		        </div>
		    </div>

		    <!-- create item order -->
		    <div class="panel panel-default">
		        <div class="panel-body"> 
		            <div class="col-md-2">
                        <a href="#">
                            <img src="/web/img/youtube.png">
                        </a>
                    </div>
		            <div class="col-md-10">
		                <h3>Создание позиций заказа</h3>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore obcaecati eveniet ipsa quia vero tempore delectus dignissimos voluptates illo explicabo consequatur ducimus, dolores, nostrum voluptatem eligendi dolore ipsum recusandae inventore!</p>
		            </div>
		        </div>
		    </div>

		    <!-- create item order -->
		    <div class="panel panel-default">
		        <div class="panel-body"> 
		            <div class="col-md-2">
                        <a href="#">
                            <img src="/web/img/youtube.png">
                        </a>
                    </div>
		            <div class="col-md-10">
		                <h3>Редактирование позиций заказа</h3>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore obcaecati eveniet ipsa quia vero tempore delectus dignissimos voluptates illo explicabo consequatur ducimus, dolores, nostrum voluptatem eligendi dolore ipsum recusandae inventore!</p>
		            </div>
		        </div>
		    </div>

		</div>
	</div>
</div>

<!--    
    <li>Удаление позиций заказа</li>
    <li>Поиск заказа по номеру</li>
    <li>Сортировка заказов</li>
    <li>Добавление срочности заказу</li> -->
</div>