<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?>
</section>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-8 twitter">
					<h3>Twitter feed</h3>
					<time datetime="2012-10-23"><a href="#">23 oct</a></time>
					<p>
						In ultricies pellentesque massa a porta. Aliquam ipsum enim, hendrerit ut porta nec, ullamcorper et nulla. In eget mi dui, sit amet scelerisque nunc. Aenean aug
					</p>
				</div>
				<div class="col-md-4 sitemap">
					<h3>Sitemap</h3>
					<div class="row">
						<div class="col-md-12">
							<a href="/home/">Home</a>
							<a href="/about/">About</a>
							<a href="/services/">Services</a>
						</div>
						<div class="col-md-12">
							<a href="/partners/">Partners</a>
							<a href="/customers/">Support</a>
							<a href="/contact/">Contact</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 social">
					<h3>Social networks</h3>
					<a href="http://twitter.com/" class="social-icon twitter"></a>
					<a href="http://facebook.com/" class="social-icon facebook"></a>
					<a href="http://plus.google.com/" class="social-icon google-plus"></a>
					<a href="http://vimeo.com/" class="social-icon-small vimeo"></a>
					<a href="http://youtube.com/" class="social-icon-small youtube"></a>
					<a href="http://flickr.com/" class="social-icon-small flickr"></a>
					<a href="http://instagram.com/" class="social-icon-small instagram"></a>
					<a href="/rss/" class="social-icon-small rss"></a>
				</div>
				<div class="col-md-8 footer-logo">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH."/include/bottom-logo.php",
                        "EDIT_TEMPLATE" => ""
                    ),
                false
                );?>
					<p>
						Copyright © 2012 Whitesquare. A
						<a href="http://pcklab.com">pcklab</a> creation
					</p>
				</div>
			</div>
		</div>
	</footer>
  </body>
</html>