<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Minetest Bower';
$this->params['jumbotron'] = '/site/_index-jumbotron';

?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>Install Bower</h2>

                <p>Bower is a command line utility. Install it with npm.</p>
                <pre>$ npm install -g bower</pre>
                <p>Bower requires <a href="http://nodejs.org/">Node and npm</a> and
                    <a href="http://git-scm.com/">Git</a>.</p>

                <h2>Configure Bower</h2>

                <p>Create a
                    <code>.bowerrc</code> file in your home directory or minetest folder with the following contents.
                </p>
                <pre>{
    "registry": "https://minetest-bower.herokuapp.com/",
    "directory" : "mods"
}</pre>
            </div>
            <div class="col-lg-6">
                <h2>Install Packages</h2>

                <p>Install packages with <code>bower install</code>.</p>
                <pre>$ bower install &lt;package&gt;</pre>

                <h2>Create Packages</h2>

                <p>Create packages with
                    <code>bower register</code> or <?= Html::a('submit a mod online', ['/mod/create']) ?>.</p>
                <pre>$ bower register &lt;my_mod_name&gt; &lt;git_endpoint&gt;

# for example
$ bower register example https://github.com/user/example.git</pre>

                <h2>Package Information</h2>

                <p>Package information is collected from a <code>bower.json</code> file in the repository</p>

                <p><?= Html::a('bower.json format  &raquo;', ['/docs/bower-json-format'], ['class' => 'btn btn-sm btn-default']); ?></p>

            </div>
        </div>

    </div>
</div>