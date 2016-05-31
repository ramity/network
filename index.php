<!DOCTYPE html>
	<head>
		<title>Demo</title>
		<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="https://ramity.com/apps/network/css/index.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
	</head>
	<body>
		<div id="top">
			<div id="topinr">
				<a id="toplogo">R</a>
				<form id="topsearch">
					<input id="topsearchinput" type="input" name="searchinput" placeholder="Enter a Search Query">
					<input id="topsearchsubmit" type="submit" value="" name="searchsubmit">
				</form>
				<a class="topnav" href="#">Home</a>
				<a class="topnav" href="#">Messages</a>
				<a class="topnav" href="#">Profile</a>
				<div id="topprofile">
					<div id="topnotif">3</div>
					<div id="topimage" style="background-image:url(http://www.sessionlogs.com/media/icons/defaultIcon.png)"></div>
					<a id="topnavprofile" href="#">Ramity</a>
					<a id="topnavextra" href="#"></a>
				</div>
				
			</div>
		</div>
		<div id="topext">
			<div id="topextinr"></div>
		</div>
		<script>
		UIextToggle=false;
		UIextHeight=52;
		$('#topnavextra').click(function(){
			if(UIextToggle)
			{
				UIextToggle=false;
				$('#topext').stop().animate({height:'0px'},1000,function()
				{
					$('#topspacer').stop().animate({height:UIextHeight},1000);
				});
			}
			else
			{
				UIextToggle=true;
				$('#topspacer').stop().animate({height:UIextHeight+200},1000,function()
				{
					$('#topext').stop().animate({height:'200px'},1000);
				});
			}
		});
		</script>
		<div id="topspacer"></div>
		<div id="content">
			<div id="contentinr">
				<div id="contentleft">
					<div id="contentsort">
						<div id="contentsortselect">
							All
							<div id="contentsortselecticon"></div>
						</div>
						<div class="contentsorttabactive">Latest</div>
						<div class="contentsorttab">Trending</div>
						<div class="contentsorttab">Recommended</div>
					</div>
					<div id="contentfeed">
						<div id="contentfeedtitle">News Feed</div>
						<div id="contentfeedholder">
							<div class="contentfeedpost"></div>
							<div class="contentfeedpost"></div>
							<div class="contentfeedpost"></div>
							<div class="contentfeedpost"></div>
							<div class="contentfeedpost"></div>
						</div>
					</div>
				</div>
				<div id="contentright">
					<div class="contentrightitem">
						<div id="contentrightselection">
							<a id="contentrightselectionactive">
								<div class="contentrightselectionitemimg"></div>
								<div class="contentrightselectionitemname">News Feed</div>
							</a>
							<a class="contentrightselectionitem">
								<div class="contentrightselectionitemimg"></div>
								<div class="contentrightselectionitemname">Profile</div>
							</a>
							<a class="contentrightselectionitem">
								<div class="contentrightselectionitemimg"></div>
								<div class="contentrightselectionitemname">
									Followers
									<div class="contentrightselectionitemevalue">45</div>
								</div>
							</a>
							<a class="contentrightselectionitem">
								<div class="contentrightselectionitemimg"></div>
								<div class="contentrightselectionitemname">
									Following
									<div class="contentrightselectionitemevalue">206</div>
								</div>
							</a>
							<a class="contentrightselectionitem">
								<div class="contentrightselectionitemimg"></div>
								<div class="contentrightselectionitemname">Messages</div>
							</a>
							<a class="contentrightselectionitem">
								<div class="contentrightselectionitemimg"></div>
								<div class="contentrightselectionitemname">Photos</div>
							</a>
							<a class="contentrightselectionitem">
								<div class="contentrightselectionitemimg"></div>
								<div class="contentrightselectionitemname">Videos</div>
							</a>
							<a class="contentrightselectionitem">
								<div class="contentrightselectionitemimg"></div>
								<div class="contentrightselectionitemname">Settings</div>
							</a>
						</div>
					</div>
					<div class="contentrightitem">
						<div id="contentrightactivity">
							<div id="contentrightactivitytitle">Activity</div>
							<a class="contentrightactivityitem">stuff</a>
							<a class="contentrightactivityitem">stuff2</a>
							<a class="contentrightactivityitem">stuff3</a>
							<a class="contentrightactivityitem">stuff4</a>
						</div>
					</div>
					<div class="contentrightitem">
						<div id="contentrighttrending">
							<div id="contentrighttrendingtitle">Trending</div>
							<a class="contentrighttrendingitem">trend</a>
							<a class="contentrighttrendingitem">trend2</a>
							<a class="contentrighttrendingitem">trend3</a>
							<a class="contentrighttrendingitem">trend4</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>