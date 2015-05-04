<?php include('includes/header.php');?>
		<div>
		  <input type="hidden" id="services_menu" />
			<div class="content" id="services">
				<div class="sendEnquiry">
					<p class="servicesHead">
						OFFERING PROFESSIONAL SERVICES ON VARIOUS MOBILE AND WEB PLATFORMS
					</p>
					<p class="servicesText">
						Innolance is a competent technology firm offering professional services on various Mobile and Web platforms. We undertake projects on fixed price or time and
						material basis. Despite the size and scope of your project, our skilled professionals can use their unparalleled expertise to plan and execute your projects on time and within budget.
					</p>
					<p class="sendEnquiryButton">
						Got a question &#63; <a href="#" >Send Inquiry</a>
					</p>
				</div>
				<div class="servicesOfferedBG">
					<div class="servicesOffered">
						<p class="servicesOfferedHead">
							CHECKOUT INNOLANCE SERVICES
						</p>
						<div class="service">
						  <a href="/mobile-application-development">
						    <p class="serviceName">
  								Mobile App Development
  							</p>
						  </a>
						  <a href="/mobile-application-development">
							 <p class="serviceImage mobileIcon"></p>
							</a>
							<p class="serviceDetail">
                Functional and technical aspects of next generation mobile application development at Innolance.
							</p>
						</div>
						<div class="service">
						  <a href="/responsive">
						    <p class="serviceName">
  								Responsive Web Design
  							</p>
						  </a>
              <a href="/responsive">
                <p class="serviceImage responsiveIcon"></p>
              </a>
							<p class="serviceDetail">
								The Web Design architecture that allows you to mirror the content from a website to any type if mobile device.
							</p>
						</div>
						<div class="service serviceNoMargin">
						  <a href="/web-app-development">
						    <p class="serviceName">
  								Web Development
  							</p>
						  </a>
						  <a href="/web-app-development">
						    <p class="serviceImage webIcon"></p>
						  </a>
							<p class="serviceDetail">
								Web development & static web pages to complex content management systems and web applications
							</p>
						</div>
						<div class="service">
						  <a href="/quality-assurance">
						    <p class="serviceName">
  								Quality Assurance
  							</p>
						  </a>
              <a href="/quality-assurance">
                <p class="serviceImage qualityIcon"></p>
              </a>
							<p class="serviceDetail">
								Independent Quality Assurance services to validate your mobile and web software applications.
							</p>
						</div>
						<div class="service">
							<a href="/businessIntelligenceAnalytics">
  							<p class="serviceName">
  								Business Intelligence Analytics
  							</p>
							</a>
							<a href="/businessIntelligenceAnalytics"><p class="serviceImage BIIcon"></p></a>
							<p class="serviceDetail">
                Understanding your company's BI needs & helping to execute strategies that will give your company a competitive edge.
							</p>
						</div>
						<div class="service serviceNoMargin">
						  <a href="/eCommerce">
						    <p class="serviceName">
  								eCommerce Applications
  							</p>
						  </a>
						  <a href="/eCommerce">
						    <p class="serviceImage ecommerceIcon"></p>
						  </a>
							<p class="serviceDetail">
								eCommerce websites are the current and future forms of online shopping, build the perfect ones with Innolance.
							</p>
						</div>
						<div class="service">
						  <a href="/ruby">
						    <p class="serviceName">
  								Ruby On Rails Development
  							</p>
						  </a>
						  <a href="/ruby">
						    <p class="serviceImage rubyIcon"></p>
						  </a>
							<p class="serviceDetail">
								Often simply Rails, is an open source web application framework which runs on the Ruby programming language.
							</p>
						</div>
						<div class="service">
						  <a href="/salesforce">
						    <p class="serviceName">
  								Salesforce Platform
  							</p>
						  </a>
						  <a href="/salesforce">
						    <p class="serviceImage salesforceIcon"></p>
						  </a>
							<p class="serviceDetail">
								Salesforce.com.Inc. is a global enterprise software company headquartered in SF. Best known for its CRM tools.
							</p>
						</div>
						<div class="service serviceNoMargin">
						  <a href="/sharepoint">
						    <p class="serviceName">
  								Sharepoint
  							</p>
						  </a>
						  <a href="/sharepoint">
						    <p class="serviceImage sharepointIcon"></p>
						  </a>
							<p class="serviceDetail">
								Microsoft SharePoint is a business collaboration platform, most commonly used for information management
							</p>
						</div>
					</div>
				</div>
				<div class="bestWorks">
					<p class="bestWorksHead">
						SOME OF OUR WORKS
					</p>
					<p class="bestWorksText">
						From our widest array of amazing and interesting projects. Here are a few examples to get a taste of how we work.
					</p>
					<div class="bestWorksSlider">
						<div id="slides">
							<div class="slides_container">
								<div>
									<img src="images/amgen.png" class="bestWorkImage"/>
									<p class="bestWorkName">Amgen Biotechnology</p>
									<p class="bestWorkDetail">Amgen’s Biotechnology site is intended to increase awareness about the science of biology and relevance of biotechnology in healthcare. Amgen intends its website to serve as a source of general. </p>
								</div>

								<div>
									<img src="images/nyc.png" class="bestWorkImage"/>
									<p class="bestWorkName">NYC Responsive Website</p>
									<p class="bestWorkDetail">The Partnership for New York City is a nonprofit membership organization comprised of a select group of two hundred CEOs from New York City’s top corporate, investment and entrepreneurial firms. </p>
								</div>

								<div>
									<img src="images/ralfracing.png" class="bestWorkImage"/>
									<p class="bestWorkName">Ralf Racing</p>
									<p class="bestWorkDetail">
									 The Racecar Balancing Journal© (RBJ), was developed to provide drivers and teams the ability to have
									 a mobile weight and balance calculator on an iPad that ties the vehicle setup to actual track
									 performance via journal entries.
								</p>
								</div>

								<div>
									<img src="images/work1.png" class="bestWorkImage"/>
									<p class="bestWorkName">Collect for Kids</p>
									<p class="bestWorkDetail">A charitable organization guides donors in our community to donate through the charity of their choice or choose a designared collection center, where these donations will be delivred to participating schools and deserving students.</p>
								</div>

							</div>
							<a href="" class="prev"></a>
					    <a href="" class="next"></a>
						</div>
					</div>
				</div>

				<div class="clr">

				</div>
			</div>
		</div>

<?php include('includes/footer.php');?>

<script type="text/javascript">
  $(document).ready(function() {
    $('.drop_down').addClass('menu_active');
			$(function() {
				$('#slides').slides({
					play : 10000,
					pause : 10000,
					hoverPause : true,
					effect : "fade",
					slideSpeed : 5000
				});
			});
  });
</script>
