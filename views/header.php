<!Doctype html>
<html>
    <header>
        <!--public/css/jquery-ui-1.10.4.custom -->
        <link rel="stylesheet" type="text/css" href="<?php echo basePath; ?>public/css/jquery-ui-1.10.4.custom.css" />
   
        <link rel="stylesheet" type="text/css" href="<?php echo basePath; ?>public/css/menuBar.css" />
  
        <script src="<?php echo basePath; ?>public/js/jquery.js"></script>
        <script src="<?php echo basePath; ?>public/js/jquery-ui-1.10.3.custom.js"></script>
        
        
        
        <link rel="stylesheet" type="text/css" href="<?php echo basePath; ?>public/css/default.css" />
        <script src="<?php echo basePath; ?>public/js/default.js"></script>
       
        <link rel="stylesheet" type="text/css" href="<?php echo basePath; ?>public/css/changeDefault.css" />
        <script src="<?php echo basePath; ?>public/js/changeDefault.js"></script>
        
        <?php
            //public css
            if(isset($this->publicCss))
            {
                foreach($this->publicCss as $css)
                {
                    echo '<link rel="stylesheet" type="text/css" href="'.basePath.'public/css/'.$css.'.css" />';
                }
            }
            //public js
            if(isset($this->publicJs))
            {
                foreach($this->publicJs as $js)
                {
                    echo '<script type="text/javascript" src="'.basePath.'public/js/'.$js.'.js"></script>';
                }
            }
            //view css
            if(isset($this->css))
            {
                foreach($this->css as $css)
                {
                    echo '<link rel="stylesheet" type="text/css" href="'.basePath.'views/'.$css.'.css" />';
                }
            }
            //views js
            if(isset($this->js))
            {
                foreach($this->js as $js)
                {
                    echo '<script type="text/javascript" src="'.basePath.'views/'.$js.'.js"></script>';
                }
            }
			
        ?>
    </header>
    
    <body>
        <?php
        if($header)
        {?>
        <!--<div id="header" style="height: 25px;"class="ui-widget-header">
                Scheduler
        </div>--><?php 
        } ?>
        <?php
        if($menue)
        {
            if(Session::get('role') == 'admin')
            {?>
                <?php
            }
            else
            {
                ?><div id="menu-wrap" >
            <ul id="menu" >
                        <li><a href="/scheduler/employee">Employee</a>
                        </li>
                        <li><a href="#">Schedule</a></li>
                        <li><a href="/scheduler/meeting">Meeting</a>
                            <ul>
                                <li><a href="/scheduler/meeting/createmeeting">Create Meeting</a></li>
                            </ul>
                        
                        </li>
						<li><a href="#">Notification<span class="nav-counter">3</span></a></li>
                    </ul>
                    </div><?php 
            }
            
            }?><div id="content">