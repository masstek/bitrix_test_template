<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html>
<html>
  <head>
    <title><? $APPLICATION->ShowTitle(false); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?$APPLICATION->ShowHead()?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/styles.css');
    $APPLICATION->SetAdditionalCSS('http://fonts.googleapis.com/css?family=Oswald:400,300');?>
    <?$APPLICATION->ShowMeta("keywords")?>
    <?$APPLICATION->ShowMeta("description")?> 

  


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?$APPLICATION->ShowPanel();?>
	<div class="wrapper container">
		<header>
			<form name="search" action="#" method="get" class="form-inline form-search pull-right">
				<div class="input-group">
					<label class="sr-only" for="searchInput">Search</label>
					<input class="form-control" id="searchInput" type="text" name="search" placeholder="Search">
					<div class="input-group-btn">
						<button type="submit" class="btn btn-primary">GO</button>
					</div>
				</div>
			</form>
    		<a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="Whitesquare logo"></a>
		</header>
		<?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
            "ROOT_MENU_TYPE" => "top",
            "MENU_CACHE_TYPE" => "A",
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "MENU_CACHE_GET_VARS" => "",
            "MAX_LEVEL" => "1",	
            "CHILD_MENU_TYPE" => "left",	
            "USE_EXT" => "N",	
            "DELAY" => "N",	
            "ALLOW_MULTI_SELECT" => "N",
            ),
            false
        );?>
		<div class="heading">
            <h1><?$APPLICATION->ShowTitle()?></h1>
		</div>
		<div class="row">
			<aside class="col-md-7">
            <?$APPLICATION->IncludeComponent("bitrix:menu", "left", Array(
                "ROOT_MENU_TYPE" => "left",	
                "MENU_CACHE_TYPE" => "A",	
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",	
                "MENU_CACHE_GET_VARS" => "",
                "MAX_LEVEL" => "1",	
                "CHILD_MENU_TYPE" => "left",
                "USE_EXT" => "N",
                "DELAY" => "N",	
                "ALLOW_MULTI_SELECT" => "N",
                ),
                false
            );?>
				<div class="panel panel-primary">
					<div class="panel-heading">Our offices</div>
					<div class="panel-body">
						<img src="<?=SITE_TEMPLATE_PATH?>/images/map.png" class="img-responsive" alt="Our offices">
					</div>
				</div>
			</aside>
			<section class="col-md-17">