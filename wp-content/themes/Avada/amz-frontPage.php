<?php
/**
 * Template Name: AMZ Front Page
 * A AMZ template.
 * @package bbPress
 * @package Avada
 * @subpackage Templates
 * 
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php get_header('2'); ?>
<div id="content" class="full-width">
	<div class="container">

		<section class="sec search-engine">
			<ul class="list-group list-inline" onclick="select_engine(event)">
				<li class="list-group-item selected">Google.com</li>
				<li class="list-group-item">Baidu.com</li>
				<li class="list-group-item">Amazon.com</li>
				<li class="list-group-item">Amazon.ca</li>
				<li class="list-group-item">Amazon.co.jp</li>
				<li class="list-group-item">Amazon.co.uk</li>
				<li class="list-group-item">Amazon.de</li>
				<li class="list-group-item">Amazon.com.mx</li>
			</ul>

			<div class="search-form-container">
				<form id="searchForm" class="" name="searchForm" action="//www.google.com/search?" method="get" target="_blank" onsubmit="return validate()">
					<div class="input-group">
						<input id="search_query" type="text" name="q" class="form-control" placeholder="Search" />
					</div>
					<button type="submit" id="search_submit" class="btn btn-default btn-sm ">
						<i class="fa fa-search"></i>
					</button>
				</form>
			</div>
		</section>

		<section class="main">
			<div class="row">
				<div class="col-md-12">
					<div id="conversion">
						<ul>
							<li>
								<span class="flag"><img src="//jarksolutions.ca/test/wp-content/uploads/2018/07/us-flag.png" alt="USD"></span>
								<span class="rmd-currency ">$1 RMB =</span>
								<span class="foreign-currency usd">...</span>
							</li>
							<li>
								<span class="flag"><img src="http://jarksolutions.ca/test/wp-content/uploads/2018/07/toronto-flag.png" alt="CAD"></span>
								<span class="rmd-currency ">$1 RMB =</span>
								<span class="foreign-currency cad">...</span>
							</li>
							<li>
								<span class="flag"><img src="http://jarksolutions.ca/test/wp-content/uploads/2018/07/uk-flag.png" alt="POUND"></span>
								<span class="rmd-currency ">$1 RMB =</span>
								<span class="foreign-currency pound">...</span>
							</li>
							<li>
								<span class="flag"><img src="//jarksolutions.ca/test/wp-content/uploads/2018/08/255px-Flag_of_Europe.svg.png" alt="EUR"></span>
								<span class="rmd-currency ">$1 RMB =</span>
								<span class="foreign-currency eur">...</span>
							</li>
							<li>
								<span class="currency_update" onClick="currency_func()"></span>
							</li>
						</ul>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div id="important-day">
						<ul class="list-group">
							<li class="list-group-item">
								<dl>
									<dt>100</dt>
									<dd>days to</dd>
								</dl>
								<span>Halloween</span>
							</li>
							<li class="list-group-item">
								<dl>
									<dt>100</dt>
									<dd>days to</dd>
								</dl>
								<span>Halloween</span>
							</li>
							<li class="list-group-item">
								<dl>
									<dt>100</dt>
									<dd>days to</dd>
								</dl>
								<span>Halloween</span>
							</li>
							<li class="list-group-item">
								<dl>
									<dt>100</dt>
									<dd>days to</dd>
								</dl>
								<span>Halloween</span>
							</li>
						</ul>
						<button class="btn btn-default lg-btn">
							<i class="fa fa-chevron-right"></i>
							<span>See more</span>
						</button>
					</div>
				</div>
				<div class="col-md-6 tools-container">
					<div id="tools">
						<ul class="list-group">
							<li class="list-group-item">
								<div class="tool-img">
									<img src="//jarksolutions.ca/test/wp-content/uploads/2018/07/seller-tool.png" alt="">
								</div>
								<div class="tool-name">Profits Calculator</div>
							</li>
							<li class="list-group-item">
								<div class="tool-img">
									<img src="//jarksolutions.ca/test/wp-content/uploads/2018/07/seller-tool.png" alt="">
								</div>
								<div class="tool-name">Profits Calculator</div>
							</li>
							<li class="list-group-item">
								<div class="tool-img">
									<img src="//jarksolutions.ca/test/wp-content/uploads/2018/07/seller-tool.png" alt="">
								</div>
								<div class="tool-name">Profits Calculator</div>
							</li>
							<li class="list-group-item">
								<div class="tool-img">
									<img src="//jarksolutions.ca/test/wp-content/uploads/2018/07/seller-tool.png" alt="">
								</div>
								<div class="tool-name">Profits Calculator</div>
							</li>
							<li class="list-group-item">
								<div class="tool-img">
									<img src="//jarksolutions.ca/test/wp-content/uploads/2018/07/seller-tool.png" alt="">
								</div>
								<div class="tool-name">Profits Calculator</div>
							</li>
							<li class="list-group-item">
								<div class="tool-img">
									<img src="//jarksolutions.ca/test/wp-content/uploads/2018/07/seller-tool.png" alt="">
								</div>
								<div class="tool-name">Profits Calculator</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div id="china-holidays">
						<h5>China Holidays</h5>
						<ul class="list-group">
							<li class="list-group-item">
								<dl>
									<span class="month">loading...</span>
									<dt class="date"></dt>
									<dd class="day">
										<span></span>
									</dd>
								</dl>
							</li>
							<li class="list-group-item">
								<dl>
									<span class="month">loading...</span>
									<dt class="date"></dt>
									<dd class="day">
										<span></span>
									</dd>
								</dl>
							</li>
							<li class="list-group-item">
								<dl>
									<span class="month">loading...</span>
									<dt class="date"></dt>
									<dd class="day">
										<span></span>
									</dd>
								</dl>
							</li>
							<li class="list-group-item">
								<dl>
									<span class="month">loading...</span>
									<dt class="date"></dt>
									<dd class="day">
										<span></span>
									</dd>
								</dl>
							</li>

						</ul>
					</div>
				</div>
				<div class="col-md-6 global-time-container">
					<div id="global-time">
						<ul class="list-group">
							<li class="list-group-item day-time" data-zone="Beijing">
								<dl>
									<dt class="flags">
										<img src="//jarksolutions.ca/test/wp-content/uploads/2018/07/china-flag.png" alt="">
										<span>Beijing</span>
									</dt>
									<dd class="status">Working</dd>
									<dd class="date">...</dd>
									<dd class="time">...</dd>
								</dl>
							</li>
							<li class="list-group-item day-time" data-zone="Eastern">
								<dl>
									<dt class="flags">
										<img src="//jarksolutions.ca/test/wp-content/uploads/2018/07/us-flag.png" alt="">
										<span>Eastern</span>
									</dt>
									<dd class="status">Working</dd>
									<dd class="date">...</dd>
									<dd class="time">...</dd>
								</dl>
							</li>
							<li class="list-group-item day-time" data-zone="Western">
								<dl>
									<dt class="flags">
										<img src="//jarksolutions.ca/test/wp-content/uploads/2018/07/us-flag.png" alt="">
										<span>Western</span>
									</dt>
									<dd class="status">Working</dd>
									<dd class="date">...</dd>
									<dd class="time">...</dd>
								</dl>
							</li>
							<li class="list-group-item day-time" data-zone="London">
								<dl>
									<dt class="flags">
										<img src="//jarksolutions.ca/test/wp-content/uploads/2018/07/uk-flag.png" alt="">
										<span>London</span>
									</dt>
									<dd class="status">Working</dd>
									<dd class="date">...</dd>
									<dd class="time">...</dd>
								</dl>
							</li>
							<li class="list-group-item day-time" data-zone="Toronto">
								<dl>
									<dt class="flags">
										<img src="//jarksolutions.ca/test/wp-content/uploads/2018/07/toronto-flag.png" alt="">
										<span>Toronto</span>
									</dt>
									<dd class="status">Working</dd>
									<dd class="date">...</dd>
									<dd class="time">...</dd>
								</dl>
							</li>
							<li class="list-group-item day-time" data-zone="Vancouver">
								<dl>
									<dt class="flags">
										<img src="//jarksolutions.ca/test/wp-content/uploads/2018/07/toronto-flag.png" alt="">
										<span>Vancouver</span>
									</dt>
									<dd class="status">Working</dd>
									<dd class="date">...</dd>
									<dd class="time">...</dd>
								</dl>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="international-tools">
						<div id="exTab2" class="tab_container">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#1" data-toggle="tab">US</a>
								</li>
								<li>
									<a href="#2" data-toggle="tab">England</a>
								</li>
								<li>
									<a href="#3" data-toggle="tab">Japan</a>
								</li>
								<li>
									<a href="#4" data-toggle="tab">Germany</a>
								</li>
								<li>
									<a href="#5" data-toggle="tab">France</a>
								</li>
								<li>
									<a href="#6" data-toggle="tab">Italy</a>
								</li>
								<li>
									<a href="#7" data-toggle="tab">Spain</a>
								</li>
								<li>
									<a href="#8" data-toggle="tab">Canada</a>
								</li>
								<li>
									<a href="#9" data-toggle="tab">Mexico</a>
								</li>
							</ul>

							<div class="tab-content">
								<div class="tab-pane active" id="1">
									<ul class="list-group">
										<li class="list-group-item">Amazon US</li>
										<li class="list-group-item">Sellercentral Login</li>
										<li class="list-group-item">Useful Link</li>
										<li class="list-group-item">Useful Link</li>
										<li class="list-group-item">Useful Link</li>
										<li class="list-group-item">Useful Link</li>
										<li class="list-group-item">Useful Link</li>
									</ul>
								</div>
								<div class="tab-pane" id="2">
									<ul class="list-group">
										<li class="list-group-item">Amazon US</li>
										<li class="list-group-item">Sellercentral Login</li>
										<li class="list-group-item">Useful Link2</li>
										<li class="list-group-item">Useful Link2</li>
										<li class="list-group-item">Useful Link2</li>
										<li class="list-group-item">Useful Link2</li>
										<li class="list-group-item">Useful Link2</li>
									</ul>
								</div>
								<div class="tab-pane" id="3">
									<ul class="list-group">
										<li class="list-group-item">Amazon US</li>
										<li class="list-group-item">Sellercentral Login</li>
										<li class="list-group-item">Useful Link3</li>
										<li class="list-group-item">Useful Link3</li>
										<li class="list-group-item">Useful Link3</li>
										<li class="list-group-item">Useful Link3</li>
										<li class="list-group-item">Useful Link3</li>
									</ul>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>

		</section>

	</div>

	<section class="amz-forum">
		<div class="container">
			<u>
				<h4 class="title">Forum</h4>
			</u>
			<div class="tabs">
				<ul class="list-group">
					<li class="list-group-item inactive">Hottest posts</li>
					<li class="list-group-item selected">Most recent posts</li>
				</ul>
			</div>
			<?php echo do_shortcode('[widget id="wpforo_widget_recent_topics-2"]'); ?>
			<u>
				<h4 class="title">AMAZON 101</h4>
			</u>
			<div class="amazon-101">
				<?php echo do_shortcode('[widget id="menu-widget-2"]'); ?>
			</div>
		</div>
	</section>

	<div class="container">
		<section id="amz-ad">
			<ul class="list-group">
				<li class="list-group-item">
					<img src="http://jarksolutions.ca/test/wp-content/uploads/2018/08/kande-1.png" alt="">
				</li>
				<li class="list-group-item">
					<img src="http://jarksolutions.ca/test/wp-content/uploads/2018/08/kande-1.png" alt="">
				</li>
				<li class="list-group-item">
					<img src="http://jarksolutions.ca/test/wp-content/uploads/2018/08/kande-1.png" alt="">
				</li>
				<li class="list-group-item">
					<img src="http://jarksolutions.ca/test/wp-content/uploads/2018/08/kande-1.png" alt="">
				</li>
			</ul>
		</section>

		<section id="all-tools">

			<div class="row">
				<h4 class="title">Sourcing and Suppliers</h4>
				<ul class="list-group">
					<li class="list-group-item">
						<div class="inner-wrapper">
							<img src="//jarksolutions.ca/test/wp-content/uploads/2018/08/suitcase.png" alt="useful tool">
						</div>
						<p>Useful tool</p>
					</li>
					<li class="list-group-item">
						<div class="inner-wrapper">
							<img src="//jarksolutions.ca/test/wp-content/uploads/2018/08/suitcase.png" alt="useful tool">
						</div>
						<p>Useful tool</p>
					</li>
					<li class="list-group-item">
						<div class="inner-wrapper">
							<img src="//jarksolutions.ca/test/wp-content/uploads/2018/08/suitcase.png" alt="useful tool">
						</div>
						<p>Useful tool</p>
					</li>
					<li class="list-group-item">
						<div class="inner-wrapper">
							<img src="//jarksolutions.ca/test/wp-content/uploads/2018/08/suitcase.png" alt="useful tool">
						</div>
						<p>Useful tool</p>
					</li>
					<li class="list-group-item">
						<div class="inner-wrapper">
							<img src="//jarksolutions.ca/test/wp-content/uploads/2018/08/suitcase.png" alt="useful tool">
						</div>
						<p>Useful tool</p>
					</li>
					<li class="list-group-item">
						<div class="inner-wrapper">
							<img src="//jarksolutions.ca/test/wp-content/uploads/2018/08/suitcase.png" alt="useful tool">
						</div>
						<p>Useful Tool</p>
					</li>
					<li class="list-group-item">
						<div class="inner-wrapper">
							<img src="//jarksolutions.ca/test/wp-content/uploads/2018/08/suitcase.png" alt="useful tool">
						</div>
						<p>Useful Tool</p>
					</li>
					<li class="list-group-item">
						<div class="inner-wrapper">
							<img src="//jarksolutions.ca/test/wp-content/uploads/2018/08/suitcase.png" alt="useful tool">
						</div>
						<p>Useful Tool</p>
					</li>
				</ul>
			</div>
		</section>
	</div>
	
</div>
<script src="/test/wp-content/themes/Avada/assets/js/library/widget.bundle.js"></script>
<script>

$(document).ready(function(){

		currency_func()
		global_time_func()
	
});
//test global time api
var setting = {
	method: 'GET',
	url: '',
	data: {
		operation: '',
	},
	error: function (error) {
		console.log(error);
		return
	}
};

function global_time_func(){
	var ele = $('#global-time')
	setting.method = 'POST';
	setting.data.operation ='getglobaltime';
	setting.url='/test/wp-content/themes/Avada/includes/timezone.php';
	$.ajax(setting).then(function (res) {
		var json = JSON.parse(res)
		json.zones.map(function(item,index){
			if (item.zoneName==='America/Toronto') {
				$(ele).find('[data-zone="Toronto"] .date').text(convert_unix(item.timestamp).split(';',2)[0])
				$(ele).find('[data-zone="Toronto"] .time').text(convert_unix(item.timestamp).split(';',2)[1])
			}else if (item.zoneName==='America/Vancouver') {
				$(ele).find('[data-zone="Vancouver"] .date').text(convert_unix(item.timestamp).split(';',2)[0])
				$(ele).find('[data-zone="Vancouver"] .time').text(convert_unix(item.timestamp).split(';',2)[1])
			}else if (item.zoneName==='Asia/Shanghai') {
				$(ele).find('[data-zone="Beijing"] .date').text(convert_unix(item.timestamp).split(';',2)[0])
				$(ele).find('[data-zone="Beijing"] .time').text(convert_unix(item.timestamp).split(';',2)[1])
			}else if (item.zoneName==='Europe/London') {
				$(ele).find('[data-zone="London"] .date').text(convert_unix(item.timestamp).split(';',2)[0])
				$(ele).find('[data-zone="London"] .time').text(convert_unix(item.timestamp).split(';',2)[1])
			}else if (item.zoneName==='America/Chicago') {
				$(ele).find('[data-zone="Eastern"] .date').text(convert_unix(item.timestamp).split(';',2)[0])
				$(ele).find('[data-zone="Eastern"] .time').text(convert_unix(item.timestamp).split(';',2)[1])
			}else if (item.zoneName==='America/Boise') {
				$(ele).find('[data-zone="Western"] .date').text(convert_unix(item.timestamp).split(';',2)[0])
				$(ele).find('[data-zone="Western"] .time').text(convert_unix(item.timestamp).split(';',2)[1])
			}
		});
	});
}

function convert_unix(UNIX_timestamp){
  var a = new Date(UNIX_timestamp * 1000);
  var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
  var year = a.getUTCFullYear();
  var month = months[a.getUTCMonth()];
  var date = a.getUTCDate();
  var hours = a.getUTCHours();
  var min = a.getUTCMinutes();
  var amOrpm = a.toLocaleTimeString('en-US', {hour: '2-digit', minute:'2-digit'})
  var time = date + ' ' + month + ' ' + year + ';' +hours+':'+min;
  
  return time;
}

function currency_func() {
	setting.method = 'GET';
	setting.url='/test/wp-content/themes/Avada/includes/currency.php';
	$.ajax(setting).then(function (res) {
		var data = JSON.parse(res)
		$('.foreign-currency.usd').html(data.rates.USD+' USD');
		$('.foreign-currency.cad').html(data.rates.CAD+' CAD');
		$('.foreign-currency.pound').html(data.rates.GBP+' POUND');
		$('.foreign-currency.eur').html(data.rates.EUR+' EUR');
		$('.currency_update').html('Updated at: ' + data.date);
	});
}
</script>
<?php 

get_footer();

 
/* Omit closing PHP tag to avoid "Headers already sent" issues. */
