<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;
$this->layout = false;
?>

<!DOCTYPE html>
<html>
  <head>
      <title></title>
      <meta charset = "utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
        	.topLabel {
          		width: 100%;
          		height: 200px;
          		text-align: center;
          		margin-bottom: 20px;
        	}
        	#customNav {
          		background-color: rgb(234, 20, 20);
          		color: white;
        	}
        	.navbar-nav {
          		color: white;
        	}
      	</style>
  </head>
  <body>
      <div class = "topLabel">
        <h1> Software Engineering class SFSU </h1>
        <h2> Spring 2017 </h2>
        <h2> Section 1 </h2>
        <h2> Team 2 </h2>
      </div>
      <nav class = "navbar navbar-inverse">
        <div class = "container-fluid">
          <ul class = "nav navbar-nav">
            <li><?= $this->Html->link( 'Ivan Yu', 'http://sfsuse.com/~ivnyu/' );?></li>
            <li><?= $this->Html->link( 'Ajinkya Chalke', 'http://sfsuse.com/~achalke/' );?></li>
            <li><?= $this->Html->link( 'Bradley Ng', 'http://sfsuse.com/~bkng/' );?></li>
            <li><?= $this->Html->link( 'Thao Luu', 'http://sfsuse.com/~tluu4/' );?></li>
	    <li><?= $this->Html->link( 'Jerry Auyeung', 'http://sfsuse.com/~jerrya/' );?></li>
            <li><?= $this->Html->link( 'David Rodriguez', 'http://sfsuse.com/~drodri11/' );?></li>
          </ul>
        </div>
      </nav>
      <div class = "jumbotron">
        <h1> CSC 648/848 Group </h1>
        <p> Click on the navbar or the links below to access a member's about-me page. </p>
        <div>
        <h2> Members: </h2>
        <ul>
          <li><?= $this->Html->link( 'Ivan Yu', 'http://sfsuse.com/~ivnyu/' );?></li>
          <li><?= $this->Html->link( 'Ajinkya Chalke', 'http://sfsuse.com/~achalke/' );?></li>
          <li><?= $this->Html->link( 'Bradley Ng', 'http://sfsuse.com/~bkng/' );?></li>
          <li><?= $this->Html->link( 'Thao Luu', 'http://sfsuse.com/~tluu4/' );?></li>
          <li><?= $this->Html->link( 'Jerry Auyeung', 'http://sfsuse.com/~jerrya/' );?></li>
	  <li><?= $this->Html->link( 'David Rodriguez', 'http://sfsuse.com/~drodri11/' );?></li>
        <ul>
        </div>
      </div>
  </body>
</html>

