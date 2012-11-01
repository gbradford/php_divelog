<?php
  include("./code/include/session.php");
  session_start(); 
  //** Filename = index.php **//
  ini_set('memory_limit', '256M');
  //include("./code/functions.inc");

  //phpinfo();
  if (!isset($_SESSION['imageType']))
  {
    //0=Dive, 1=Accommodations, 2=Dive Trip, 3=Dive Buddy, 4=Dive Location
    $_SESSION['imageType'] = 0;
  }
  if (!isset($_SESSION['imageTypeID']))
  {
    //    imageType=0: imageTypeID = dive number
    //    imageType=1: imageTypeID = accommodation ID
    //    imageType=2: imageTypeID = dive trip ID
    //    imageType=3: imageTypeID = dive buddy ID
    //    imageType=4: imageTypeID = dive location ID
    $_SESSION['imageTypeID'] = 0;
  }

  
  
  if ($_GET[vPage] != "")
  {
    switch ($_GET[vPage])
    {
      case "main":
        include("./code/main.inc");
        break;
      case "dives":
        include("./code/DiveLog.inc");
        break;
      case "divebuddys":
        include("./code/DiveBuddys.inc");
        break;
      case "divelocations":
        include("./code/DiveLocations.inc");
        break;
      case "diveshops":
        include("./code/DiveShops.inc");
        break;
      case "divesites":
        include("./code/DiveSites.inc");
        break;
      case "divetrips":
        include("./code/DiveTrips.inc");
        break;
      case "watertypes":
        include("./code/WaterTypes.inc");
        break;
      case "urls":
        include("./code/URLs.inc");
        break;
      case "listdives":
        include("./code/ListDives.inc");
        break;
      case "process":
        include("./code/process.php");
        break;
      case "userinfo":
        include("./code/userinfo.php?user=".$_GET[vUser]);
        break;
      default:
        include("./code/DiveLog.inc");
        break;
    }
  }
  else
  {
    $_GET[vDir] = "./";
    include("./code/DiveLog.inc");
  }
?>  

