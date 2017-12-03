<?php
require_once("formtools/global/api/api.php");
require "login/loginheader.php";
$fields = ft_api_init_form_page(10);
$params = array(
  "submit_button" => "submit",
  "next_page" => "confirmation.php",
  "form_data" => $_POST,
  "finalize" => true
);
ft_api_process_form($params);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<!-- Bootstrap -->
               <link href="css/bootstrap.css" rel="stylesheet" media="screen">
               <link href="css/main.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
				<div style="padding: 10px 100px 10px 10px;"><h1>2017 Counselor Recommendation Form Survey</h1>		
				To be completed by a school official, faculty member, or counselor. The person completing this form is required to sign the School Signatures Assurance Form. A Student who is not successful in a reqular school envirnoment is unlikely to be successful at AGS. Submit nominations only if students are willing and able to attend and participate fully in the entire school. <br> <br> Please complete the following form for each nominated student.<br><br>
						
				<b>1. School Official Providing Information</b><br>
				Signature of this person must be on the School Signature Assurance Form. Please use upper and lower case letters</div>
				<table>
				<tr>
					<td width="30%">
						School Official's First Name (Ex. Pamela)
					</td>
					<td>
						<input type="text" name="School_Official_first_name">
					</td>
				</tr>
				<tr>
					<td>
						School Official's Last Name (Ex. Coleman)  
					</td>
					<td>
						<input type = "text" name="School_Official_last_name">
					</td>
				</tr>
				<tr>
					<td>
						School Official's Email Address  
					</td>
					<td>
						<input type="email" name="School_Official_email">
					</td>
				</tr>
				<tr>
					<td>
						Confirm Email Address  
					</td>
					<td>
						<input type="email" name="Counselor_email">
					</td>
				</tr>
				<tr>
					<td>
						School Official's Phone Number (Include area code and extension. Ex. 501-450-1279 ext. 12) 
					</td>
					<td>
						<input type="tel" name= "counselor_phone">
					</td>
				</tr>
				<tr>
					<td>
						Relationship to Student (Ex. Counselor, Principal)  
					</td>
					<td>
						<input type="text" name="Student_relationship"> <br><br>
					</td>
				</tr>
			</table>
			<div style="padding: 10px 100px 10px 10px;"><b>2. Student's Information</b><br> Please use upper and lower case letters</div>
			<table>
				<tr>
					<td>
						Student's First Name (Ex. Pamela) 
					</td>
					<td>
						<input type="text" name="student_first_name">
					</td>
				</tr>
				<tr>
					<td>
						Student's Last Name (Ex. Coleman) 
					</td>
					<td>
						<input type="text" name="student_last_name">
					</td>
				</tr>
			</table>
			<div style="padding: 10px 100px 10px 10px;"><b>3. Nominating High School</b></div>
			<table>
				<tr>
					<td>
						School Name
					</td>
					<td>
						<select name= "nominating_high_school">
							<option value=""</option> 
							<option value="abundant_life_school">Abundant Life School</option>
							<option value="academics_plus">Academics Plus</option>
							<option value="acorn_high_school">Acorn High School</option>
							<option value="alma_high_school">Alma High School</option>
							<option value="alpena_high_school">Alpena High School</option>
							<option value="arkadelphia_high_school">Arkadelphia High School</option>
							<option value="arkansas_arts_academy">Arkansas Arts Academy</option>
							<option value="arkansas_baptist_high_school">Arkansas Baptist High School</option>
							<option value="arkansas_high_school">Arkansas High School</option>
							<option value="arkansas_school_for_mathematics_sciences_and_the_arts">Arkansas School for Mathematics, Sciences, and the Arts</option>"
							<option value="arkansas_school_for_the_blind">Arkansas School for the Blind</option>
							<option value="arkansas_school_for_the_deaf">Arkansas School for the Deaf</option>
							<option value="armorel_high_school">Armorel High School</option>
							<option value="ashdown_high_school">Ashdown High School</option>
							<option value="ashley_christian_academy">Ashley Christian Academy</option>
							<option value="atkins_high_school">Atkins High School</option>
							<option value="augusta_high_school">Augusta High School</option>
							<option value="bald_knob_high_school">Bald Knob High School</option>
							<option value="barton/lexa_high_school">Barton/Lexa High School</option>
							<option value="batesville_high_school">Batesville High School</option>
							<option value="bauxite_high_school">Bauxite High School</option>
							<option value="bay_high_school">Bay High School</option>
							<option value="bearden_high_school">Bearden High School</option>
							<option value="beebe_high_school">Beebe High School</option>
							<option value="benton_county_school_of_the_arts">Benton County School of the Arts</option>
							<option value="benton_high_school">Benton High School</option>
							<option value="bentonville_high_school">Bentonville High School</option>
							<option value="bentonville_west_high_school">Bentonville West High School</option>
							<option value="bergman_high_school">Bergman High School</option>
							<option value="berryville_high_school">Berryville High School</option>
							<option value="bigelow_high_school">Bigelow High School</option>
							<option value="bismarck_high_school">Bismarck High School</option>
							<option value="blevins_high_school">Blevins High School</option>
							<option value="blytheville_high_school_a_new_tech_school">Blytheville High School-A New Tech School</option>
							<option value="booneville_high_school">Booneville High School</option>
							<option value="bradford_high_school">Bradford High School</option>
							<option value="bradley_high_school">Bradley High School</option>
							<option value="brinkley_high_school">Brinkley High School</option>
							<option value="brookland_high_school">Brookland High School</option>
							<option value="bruno_pyatt_high_school">Bruno-Pyatt High School</option>
							<option value="bryant_high_school">Bryant High School</option>
							<option value="buffalo_island_central_high_school">Buffalo Island Central High School</option>
							<option value="cabot_high_school">Cabot High School</option>
							<option value="caddo_hills_high_school">Caddo Hills High School</option>
							<option value="calico_rock_high_school">Calico Rock High School</option>
							<option value="camden_fairview_high_school">Camden-Fairview High School</option>
							<option value="carlisle_high_school">Carlisle High School</option>
							<option value="catholic_high_school_for_boys_little_rock">Catholic High School for Boys - Little Rock</option>
							<option value="cave_city_high_school">Cave City High School</option>
							<option value="cedar_ridge_high_school">Cedar Ridge High School</option>
							<option value="cedarville_high_school">Cedarville High School</option>
							<option value="centerpoint_high_school">Centerpoint High School</option>
							<option value="central_arkansas_christian_school">Central Arkansas Christian School</option>
							<option value="central_high_school_helena_west_helena">Central High School Helena West Helena</option>
							<option value="charleston_high_school">Charleston High School</option>
							<option value="christ_lutheran_high_school">Christ Lutheran High School</option>
							<option value="clarendon_high_school">Clarendon High School</option>
							<option value="clarksville_high_school">Clarksville High School</option>
							<option value="clinton_high_school">Clinton High School</option>
							<option value="concord_high_school">Concord High School</option>
							<option value="conway_christian_school">Conway Christian School</option>
							<option value="conway_high_school">Conway High School</option>
							<option value="corning_high_school">Corning High School</option>
							<option value="cossatot_river_high_school">Cossatot River High School</option>
							<option value="cotter_high_school">Cotter High School</option>
							<option value="county_line_high_school">County Line High School</option>
							<option value="cross_county_high_school">Cross County High School</option>
							<option value="crossett_high_school">Crossett High School</option>
							<option value="cutter_morning_star_high_school">Cutter-Morning Star High School</option>
							<option value="danville_high_school">Danville High School</option>
							<option value="dardanelle_high_school">Dardanelle High School</option>
							<option value="decatur_high_school">Decatur High School</option>
							<option value="deer_high_school">Deer High School</option>
							<option value="dequeen_high_school">Dequeen High School</option>
							<option value="dermott_high_school">Dermott High School</option>
							<option value="des_arc_high_school">Des Arc High School</option>
							<option value="dewitt_high_school">Dewitt High School</option>
							<option value="dierks_high_school">Dierks High School</option>
							<option value="dollarway_high_school">Dollarway High School</option>
							<option value="dover_high_school">Dover High School</option>
							<option value="drew_central_high_school">Drew Central High School</option>
							<option value="dumas_high_school">Dumas High School</option>
							<option value="earle_high_school">Earle High School</option>
							<option value="east_poinsett_co_high_school">East Poinsett Co. High School</option>
							<option value="el_dorado_high_school">El Dorado High School</option>
							<option value="elkins_high_school">Elkins High School</option>
							<option value="emerson_high_school">Emerson High School</option>
							<option value="england_high_school">England High School</option>
							<option value="episcopal_collegiate_school_little_rock">Episcopal Collegiate School - Little Rock</option>
							<option value="estem_charter_little_rock">eStem Charter - Little Rock</option>
							<option value="eureka_springs_high_school">Eureka Springs High School</option>
							<option value="farmington_high_school">Farmington High School</option>
							<option value="fayetteville_high_school_east">Fayetteville High School East</option>
							<option value="flippin_high_school">Flippin High School</option>
							<option value="fordyce_high_school">Fordyce High School</option>
							<option value="foreman_high_school">Foreman High School</option>
							<option value="forrest_city_high_school">Forrest City High School</option>
							<option value="fouke_high_school">Fouke High School</option>
							<option value="fountain_lake_high_school">Fountain Lake High School</option>
							<option value="genoa_central_high_school">Genoa Central High School</option>
							<option value="gentry_high_school">Gentry High School</option>
							<option value="glen_rose_high_school">Glen Rose High School</option>
							<option value="gosnell_high_school">Gosnell High School</option>
							<option value="grand_prairie_evangelical_methodist_school">Grand Prairie Evangelical Methodist School</option>
							<option value="gravette_high_school">Gravette High School</option>
							<option value="green_forest_high_school">Green Forest High School</option>
							<option value="greenbrier_high_school">Greenbrier High School</option>
							<option value="greene_co_tech_high_school">Greene Co. Tech High School</option>
							<option value="greenland_high_school">Greenland High School</option>
							<option value="greenwood_high_school">Greenwood High School</option>
							<option value="gurdon_high_school">Gurdon High School</option>
							<option value="guy_perkins_high_school">Guy-Perkins High School</option>
							<option value="haas_hall_academy_bentonville">Haas Hall Academy - Bentonville</option>
							<option value="haas_hall_academy_fayetteville">Haas Hall Academy -  Fayetteville</option>
							<option value="hackett_high_school">Hackett High School</option>
							<option value="hall_high_school">Hall High School</option>
							<option value="hamburg_high_school">Hamburg High School</option>
							<option value="hampton_high_school">Hampton High School</option>
							<option value="har_ber_high_school">Har-Ber High School</option>
							<option value="harmony_grove_high_school_ouachita_co">Harmony Grove High School - Ouachita Co.</option>
							<option value="harmony_grove_high_school_saline_co">Harmony Grove High School - Saline Co.</option>
							<option value="harrisburg_high_school">Harrisburg High School</option>
							<option value="harrison_high_school">Harrison High School</option>
							<option value="hartford_high_school">Hartford High School</option>
							<option value="hazen_high_school">Hazen High School</option>
							<option value="heber_springs_high_school">Heber Springs High School</option>
							<option value="hector_high_school">Hector High School</option>
							<option value="hermitage_high_school">Hermitage High School</option>
							<option value="highland_high_school">Highland High School</option>
							<option value="hillcrest_high_school">Hillcrest High School</option>
							<option value="hope_high_school">Hope High School</option>
							<option value="horatio_high_school">Horatio High School</option>
							<option value="hot_springs_high_school">Hot Springs High School</option>
							<option value="hoxie_high_school">Hoxie High School</option>
							<option value="huntsville_high_school">Huntsville High School</option>
							<option value="izard_co_consolidated_high_school">Izard Co. Consolidated High School</option>
							<option value="ja_fair_high_school">J.A. Fair High School</option>
							<option value="jd_leftwich_high_school">J.D. Leftwich High School</option>
							<option value="jacksonville_high_school">Jacksonville High School</option>
							<option value="jacksonville_lighthouse_charter_school">Jacksonville Lighthouse Charter School</option>
							<option value="jasper_high_school">Jasper High School</option>
							<option value="jessieville_high_school">Jessieville High School</option>
							<option value="joe_t_robinson_high_school">Joe T. Robinson High School</option>
							<option value="junction_city_high_school">Junction City High School</option>
							<option value="kingston_high_school">Kingston High School</option>
							<option value="kipp_blytheville_collegiate_high_school">Kipp Blytheville Collegiate High School</option>
							<option value="kipp_delta_collegiate_high_school">Kipp Delta Collegiate High School</option>
							<option value="kirby_high_school">Kirby High School</option>
							<option value="lafayette_county_high_school">Lafayette County High School</option>
							<option value="lake_hamilton_high_school">Lake Hamilton High School</option>
							<option value="lakeside_high_school_chicot_county">Lakeside High School Chicot County</option>
							<option value="lakeside_high_school_garland_county">Lakeside High School Garland County</option>
							<option value="lamar_high_school">Lamar High School</option>
							<option value="lavaca_high_school">Lavaca High School</option>
							<option value="lead_hill_high_school">Lead Hill High School</option>
							<option value="lee_academy_inc">Lee Academy Inc.</option>
							<option value="lee_high_school">Lee High School</option>
							<option value="life_way_christian_school">Life Way Christian School</option>
							<option value="lincoln_high_school">Lincoln High School</option>
							<option value="lisa_academy_high_school_little_rock">Lisa Academy High School - Little Rock</option>
							<option value="lisa_academy_high_school_north_little_rock">Lisa Academy High School - North Little Rock</option>
							<option value="little_rock_central_high_school">Little Rock Central High School</option>
							<option value="little_rock_christian_academy">Little Rock Christian Academy</option>
							<option value="lonoke_high_school">Lonoke High School</option>
							<option value="magnet_cove_high_school">Magnet Cove High School</option>
							<option value="magnolia_high_school">Magnolia High School</option>
							<option value="malvern_high_school">Malvern High School</option>
							<option value="mammoth_spring_high_school">Mammoth Spring High School</option>
							<option value="manila_high_school">Manila High School</option>
							<option value="mansfield_high_school">Mansfield High School</option>
							<option value="marion_high_school">Marion High School</option>
							<option value="marked_tree_high_school">Marked Tree High School</option>
							<option value="marmaduke_high_school">Marmaduke High School</option>
							<option value="marshall_high_school">Marshall High School</option>
							<option value="marvell_elaine_high_school">Marvell-Elaine High School</option>
							<option value="maumelle_high_school">Maumelle High School</option>
							<option value="mayflower_high_school">Mayflower High School</option>
							<option value="maynard_high_school">Maynard High School</option>
							<option value="mcclellan_magnet_high_school">McClellan Magnet High School</option>
							<option value="mccrory_high_school">McCrory High School</option>
							<option value="mcgehee_high_school">McGehee High School</option>
							<option value="melbourne_high_school">Melbourne High School</option>
							<option value="mena_high_school">Mena High School</option>
							<option value="midland_high_school">Midland High School</option>
							<option value="mineral_springs_high_school">Mineral Springs High School</option>
							<option value="monticello_high_school">Monticello High School</option>
							<option value="morrilton_senior_high_school">Morrilton Senior High School</option>
							<option value="mount_ida_high_school">Mount Ida High School</option>
							<option value="mount_judea_high_school">Mount Judea High School</option>
							<option value="mount_saint_mary_academy_little_rock">Mount Saint Mary Academy - Little Rock</option>
							<option value="mountain_home_high_career_academics">Mountain Home High Career Academics</option>
							<option value="mountain_pine_high_school">Mountain Pine High School</option>
							<option value="mountain_view_high_school">Mountain View High School</option>
							<option value="mountainburg_high_school">Mountainburg High School</option>
							<option value="mt_vernon/enola_high_school">Mt. Vernon/Enola High School</option>
							<option value="mulberry_high_school">Mulberry High School</option>
							<option value="murfreesboro_high_school">Murfreesboro High School</option>
							<option value="nashville_high_school">Nashville High School</option>
							<option value="nemo_vista_high_school">Nemo Vista High School</option>
							<option value="nettleton_high_school">Nettleton High School</option>
							<option value="nevada_high_school">Nevada High  School</option>
							<option value="newport_high_school">Newport High School</option>
							<option value="norfork_high_school">Norfork High School</option>
							<option value="north_little_rock_academy">North Little Rock Academy</option>
							<option value="north_little_rock_high_school">North Little Rock High School</option>
							<option value="northside_high_school">Northside High School</option>
							<option value="northwest_arkansas_classical_academy">Northwest Arkansas Classical Academy</option>
							<option value="oark_high_school">Oark High School</option>
							<option value="oden_high_school">Oden High School</option>
							<option value="omaha_high_school">Omaha High School</option>
							<option value="osceola_high_school">Osceola High School</option>
							<option value="ouachita_high_school">Ouachita High School</option>
							<option value="ozark_adventist_academy">Ozark Adventist Academy</option>
							<option value="ozark_high_school">Ozark High School</option>
							<option value="palestine_wheatley_senior_high_school">Palestine-Wheatley Senior High School</option>
							<option value="pangburn_high_school">Pangburn High School</option>
							<option value="paragould_high_school">Paragould High School</option>
							<option value="paris_high_school">Paris High School</option>
							<option value="parkers_chapel_high_school">Parkers Chapel High School</option>
							<option value="parkview_arts_and_science_magnet_high_school">Parkview Arts And Science Magnet High School</option>
							<option value="pea_ridge_high_school">Pea Ridge High School</option>
							<option value="perryville_high_school">Perryville High School</option>
							<option value="piggott_high_school">Piggott High School</option>
							<option value="pine_bluff_high_school">Pine Bluff High School</option>
							<option value="pocahontas_high_school">Pocahontas High School</option>
							<option value="pottsville_high_school">Pottsville High School</option>
							<option value="poyen_high_school">Poyen High School</option>
							<option value="prairie_grove_high_school">Prairie Grove High School</option>
							<option value="premier_high_school_of_little_rock">Premier High School of Little Rock</option>
							<option value="prescott_high_school">Prescott High School</option>
							<option value="providence_academy">Providence Academy</option>
							<option value="providence_classical_christian_academy">Providence Classical Christian Academy</option>
							<option value="pulaski_academy">Pulaski Academy</option>
							<option value="quitman_high_school">Quitman High School</option>
							<option value="rector_high_school">Rector High School</option>
							<option value="ridgway_christian_school_pine_bluff">Ridgway Christian School - Pine Bluff</option>
							<option value="rison_high_school">Rison High School</option>
							<option value="rivercrest_high_school">Rivercrest High School</option>
							<option value="riverside_high_school">Riverside High School</option>
							<option value="riverview_high_school">Riverview High School</option>
							<option value="rogers_heritage_high_school">Rogers Heritage High School</option>
							<option value="rogers_high_school">Rogers High School</option>
							<option value="rogers_new_technology_high_school">Rogers New Technology High School</option>
							<option value="rose_bud_high_school">Rose Bud High School</option>
							<option value="rural_special_high_school">Rural Special High School</option>
							<option value="russellville_high_school">Russellville High School</option>
							<option value="salem_high_school">Salem High School</option>
							<option value="scranton_high_school">Scranton High School</option>
							<option value="searcy_high_school">Searcy High School</option>
							<option value="sheridan_high_school">Sheridan High School</option>
							<option value="shiloh_christian_school">Shiloh Christian School</option>
							<option value="shirley_high_school">Shirley High School</option>
							<option value="sia_tech_charter">SIA Tech Charter</option>
							<option value="siloam_springs_high_school">Siloam Springs High School</option>
							<option value="sloan_hendrix_high_school">Sloan-Hendrix High School</option>
							<option value="smackover_high_school">Smackover High School</option>
							<option value="south_side_high_school_bee_branch">South Side High School - Bee Branch</option>
							<option value="southside_high_school_batesville">Southside High School - Batesville</option>
							<option value="southside_high_school_fort_smith">Southside High School - Fort Smith</option>
							<option value="southwest_christian_academy">Southwest Christian Academy</option>
							<option value="sparkman_high_school">Sparkman High School</option>
							<option value="spring_hill_high_school">Spring Hill High School</option>
							<option value="springdale_alternative_school">Springdale Alternative School</option>
							<option value="springdale_high_school">Springdale High School</option>
							<option value="st_joe_high_school">St. Joe High School</option>
							<option value="st_joseph_catholic_high_school_pine_bluff">St. Joseph Catholic High School - Pine Bluff</option>
							<option value="st_joseph_catholic_school_conway">St. Joseph Catholic School - Conway</option>
							<option value="st_paul_high_school">St. Paul High School</option>
							<option value="star_city_high_school">Star City High School</option>
							<option value="strong_high_school">Strong High School</option>
							<option value="stuttgart_high_school">Stuttgart High School</option>
							<option value="subiaco_academy">Subiaco Academy</option>
							<option value="sylvan_hills_high_school">Sylvan Hills High School</option>
							<option value="taylor_high_school">Taylor High School</option>
							<option value="the_academies_at_jonesboro_high_school">The Academies at Jonesboro High School</option>
							<option value="timbo_high_school">Timbo High School</option>
							<option value="trinity_christian_school">Trinity Christian School</option>
							<option value="trumann_high_school">Trumann High School</option>
							<option value="tuckerman_high_school">Tuckerman High School</option>
							<option value="two_rivers_senior_high_school">Two Rivers Senior High School</option>
							<option value="umpire_high_school">Umpire High School</option>
							<option value="valley_springs_high_school">Valley Springs High School</option>
							<option value="valley_view_high_school">Valley View High School</option>
							<option value="van_buren_high_school">Van Buren High School</option>
							<option value="veritas_academy">Veritas Academy</option>
							<option value="vilonia_high_school">Vilonia High School</option>
							<option value="viola_high_school">Viola High School</option>
							<option value="waldron_high_school">Waldron High School</option>
							<option value="walnut_ridge_high_school">Walnut Ridge High School</option>
							<option value="warren_high_school">Warren High School</option>
							<option value="washington_academy">Washington Academy</option>
							<option value="watson_chapel_high_school">Watson Chapel High School</option>
							<option value="west_fork_high_school">West Fork High School</option>
							<option value="west_memphis_high_school">West Memphis High School</option>
							<option value="west_side_high_school_greers_ferry">West Side High School -  Greers Ferry</option>
							<option value="western_grove_high_school">Western Grove High School</option>
							<option value="western_yell_county_high_school">Western Yell County High School</option>
							<option value="westside_high_school_hartman">Westside High School - Hartman</option>
							<option value="westside_high_school_jonesboro">Westside High School  - Jonesboro</option>
							<option value="white_co_central_high_school">White Co. Central High School</option>
							<option value="white_hall_high_school">White Hall High School</option>
							<option value="wilbur_d_mills_high_school">Wilbur D. Mills High School</option>
							<option value="wonderview_high_school">Wonderview High School</option>
							<option value="woodlawn_high_school">Woodlawn High School</option>
							<option value="word_of_outreach_christian_academy">Word of Outreach Christian Academy</option>
							<option value="wynne_high_school">Wynne High School</option>
							<option value="yellville_summit_high_school">Yellville-Summit High School</option>
							<option value="other">Other</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						If you chose OTHER in the question above, please enter the name of your school. Otherwise, leave this blank<br> 
					</td>
					<td>
						<input type = "text" name = "school_name">
					</td>
				</tr>
				<tr>
					<td>
						County Where School Is Located<br> 
					</td>
					<td>
						<select name= "County_name">
							<option value=""</option> 
							<option value="arkansas">Arkansas</option>
							<option value="ashley">Ashley</option>
							<option value="baxter">Baxter</option>
							<option value="benton">Benton</option>
							<option value="boone">Boone</option>
							<option value="bradley">Bradley</option>
							<option value="calhoun">Calhoun</option>
							<option value="carroll">Carroll</option>
							<option value="chicot">Chicot</option>
							<option value="clark">Clark</option>
							<option value="clay">Clay</option>
							<option value="cleburne">Cleburne</option>
							<option value="cleveland">Cleveland</option>
							<option value="columbia">Columbia</option>
							<option value="conway">Conway</option>
							<option value="craighead">Craighead</option>
							<option value="crawford">Crawford</option>
							<option value="crittenden">Crittenden</option>
							<option value="cross">Cross</option>
							<option value="dallas">Dallas</option>
							<option value="desha">Desha</option>
							<option value="drew">Drew</option>
							<option value="faulkner">Faulkner</option>
							<option value="franklin">Franklin</option>
							<option value="fulton">Fulton</option>
							<option value="garland">Garland</option>
							<option value="grant">Grant</option>
							<option value="greene">Greene</option>
							<option value="hempstead">Hempstead</option>
							<option value="hot_spring">Hot Spring</option>
							<option value="howard">Howard</option>
							<option value="independence">Independence</option>
							<option value="izard">Izard</option>
							<option value="jackson">Jackson</option>
							<option value="jefferson">Jefferson</option>
							<option value="johnson">Johnson</option>
							<option value="lafayette">Lafayette</option>
							<option value="lawrence">Lawrence</option>
							<option value="lee">Lee</option>
							<option value="lincoln">Lincoln</option>
							<option value="little_river">Little River</option>
							<option value="logan">Logan</option>
							<option value="lonoke">Lonoke</option>
							<option value="madison">Madison</option>
							<option value="marion">Marion</option>
							<option value="miller">Miller</option>
							<option value="mississippi">Mississippi</option>
							<option value="monroe">Monroe</option>
							<option value="montgomery">Montgomery</option>
							<option value="nevada">Nevada</option>
							<option value="newton">Newton</option>
							<option value="ouachita">Ouachita</option>
							<option value="perry">Perry</option>
							<option value="phillips">Phillips</option>
							<option value="pike">Pike</option>
							<option value="poinsett">Poinsett</option>
							<option value="polk">Polk</option>
							<option value="pope">Pope</option>
							<option value="prairie">Prairie</option>
							<option value="pulaski">Pulaski</option>
							<option value="randolph">Randolph</option>
							<option value="st_francis">St. Francis</option>
							<option value="saline">Saline</option>
							<option value="scott">Scott</option>
							<option value="searcy">Searcy</option>
							<option value="sebastian">Sebastian</option>
							<option value="sevier">Sevier</option>
							<option value="sharp">Sharp</option>
							<option value="stone">Stone</option>
							<option value="union">Union</option>
							<option value="van_buren">Van Buren</option>
							<option value="washington">Washington</option>
							<option value="white">White</option>
							<option value="woodruff">Woodruff</option>
							<option value="yell">Yell</option>
						</select>
					</td>
				</tr>
			</table>
			<div style="padding: 10px 100px 10px 10px;"><b>4. Nominee has demonstrated the ability to meet or exceed expectations of behavior</b><br> 
			<table width="800px">
				<tr>
					<td>
						<input type="radio" value="5" name="behavior_rating"> 5-Very High Ability
					</td>
					<td>
						<input type="radio" value="4" name="behavior_rating"> 4-High Ability
					</td>
					<td>
						<input type="radio" value="3" name="behavior_rating"> 3-Neutral
					</td>
					<td>
						<input type="radio" value="2" name="behavior_rating"> 2-Low Ability
					</td>
					<td>
						<input type="radio" value="1" name="behavior_rating"> 1-Very Low Ability
					</td>
				</tr>
			</table>
			</div>
			<div style="padding: 10px 100px 10px 10px;"><b>7. Nominee can participate fully in a demanding schedule of activities and classes.</b><br>
			<table width="800px">
				<tr>
					<td>
						<input type="radio" value="5" name="participate_rating"> 5-Very High Ability
					</td>
					<td>
						<input type="radio" value="4" name="participate_rating"> 4-High Ability
					</td>
					<td>
						<input type="radio" value="3" name="participate_rating"> 3-Neutral
					</td>
					<td>
						<input type="radio" value="2" name="participate_rating"> 2-Low Ability
					</td>
					<td>
						<input type="radio" value="1" name="participate_rating"> 1-Very Low Ability
					</td>
				</tr>
			</table>
			</div>
			<div style="padding: 10px 100px 10px 10px;"><b>8. Nominee is likely to participate fully in interdisciplinary experiences, including student-created presentations.</b><br> 
			<table width="800px">
				<tr>
					<td>
						<input type="radio" value="5" name="presentations_rating"> 5-Very High Ability
					</td>
					<td>
						<input type="radio" value="4" name="presentations_rating"> 4-High Ability
					</td>
					<td>
						<input type="radio" value="3" name="presentations_rating"> 3-Neutral
					</td>
					<td>
						<input type="radio" value="2" name="presentations_rating"> 2-Low Ability
					</td>
					<td>
						<input type="radio" value="1" name="presentations_rating"> 1-Very Low Ability
					</td>
				</tr>
			</table>
			</div>
			<div style="padding: 10px 100px 10px 10px;"><b>9. Nominee is likely to participate in and complete the entire six-week program.</b><br>
			<table width="800px">
				<tr>
					<td>
						<input type="radio" value="5" name="program_rating"> 5-Very High Ability
					</td>
					<td>
						<input type="radio" value="4" name="program_rating"> 4-High Ability
					</td>
					<td>
						<input type="radio" value="3" name="program_rating"> 3-Neutral
					</td>
					<td>
						<input type="radio" value="2" name="program_rating"> 2-Low Ability
					</td>
					<td>
						<input type="radio" value="1" name="program_rating"> 1-Very Low Ability
					</td>
				</tr>
			</table>
			</div>
			<div style="padding: 10px 100px 10px 10px;"><b>10. Nominee has the ability to be an effective advocate for AGS in his or her school and community.</b><br> 
			<table width="800px">
				<tr>
					<td>
						<input type="radio" value="5" name="ability_rating"> 5-Very High Ability
					</td>
					<td>
						<input type="radio" value="4" name="ability_rating"> 4-High Ability
					</td>
					<td>
						<input type="radio" value="3" name="ability_rating"> 3-Neutral
					</td>
					<td>
						<input type="radio" value="2" name="ability_rating"> 2-Low Ability
					</td>
					<td>
						<input type="radio" value="1" name="ability_rating"> 1-Very Low Ability
					</td>
				</tr>
			</table>
			</div>
			<div style="padding: 10px 100px 10px 10px;"><b>11. Based on in-depth knowledge of the student, please provide any additional information that would help the Selection Committee make a more informed decision.</b><br><div style="padding: 10px;"><textarea name="informed_decision" rows="8 " cols="100 "> </textarea></div><br><br>
			<input type="submit" name="submit" value="SUBMIT RECOMMENDATION">
			</div>
		</form>
	</body>
</html>