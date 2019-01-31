<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    	// ============================= Users Table ============================
    	if(DB::table('users')->get()->count() == 0)
    	{
			$user = DB::table('users')->insert(array(
		     array(
		       'name' => 'Jubair Rahman',
		       'email' => 'olcbd188@gmail.com',
		       'password' => Hash::make('olcbd188credential'),
		       'created_at' => new DateTime(),
		       'updated_at' => new DateTime()
		     ),
		     array(
		       'name' => 'Numan Ibn Mazid',
		       'email' => 'numanworkstation@gmail.com',
		       'password' => Hash::make('olcbd188credential'),
		       'created_at' => new DateTime(),
		       'updated_at' => new DateTime()
		     ),
		   ));
		} 
		else 
		{ 
			echo "\e[31mTable is not empty, therefore NOT "; 
		}

		// ============================= Menus Table ============================
    	if(DB::table('menus')->get()->count() == 0)
    	{
			$menus = DB::table('menus')->insert(array(
		     array(
		       'menu_title' => 'Clients',
		       'short_description' => NULL,
		       'menu_content' => '<p id="myTitle">WE CATER LEGAL SERVICES FOR:</p>
<center>
<div class="row" style="color:#000000">
<div class="col-sm-6">
<p>Berth Operators</p>

<p>Bunkers and necessary suppliers</p>

<p>Charterers</p>

<p>Chipping and Painting Contractors</p>

<p>Clearing and Forwarding Agents</p>

<p>Commodity Houses</p>

<p>Container Lines</p>

<p>Crew Members</p>

<p>Defence Clubs</p>

<p>Freight Forwarders</p>

<p>Foreign investors&nbsp;</p>

<p>Hull and Machinery Underwriters</p>

<p>Insurers and Reinsurers</p>

<p>Jetty Handling Contractors</p>

<p>Lighterage Contractors</p>

<p>Manning Agents</p>

<p>Masters</p>

<p>Merchant Labours</p>

<p>NVOCCs</p>

<p>Offshore Contractors</p>

<p>Oil Majors</p>

<p>Owners of FPSOs</p>
</div>
<div class="col-sm-6">
<p>P&amp;I clubs</p>

<p>Pilots</p>

<p>Port Authorities</p>

<p>Salvors</p>

<p>Service Organizations</p>

<p>Ship Breakers and Re-cyclers</p>

<p>Ship Brokers</p>

<p>Ship Chandlers</p>

<p>Ship Handling Operators</p>

<p>Ship Managers</p>

<p>Ship Operators</p>

<p>Shipping or Steamer Agents</p>

<p>Ship Owners</p>

<p>Shipyards</p>

<p>Shore Handling Contractors</p>

<p>Stevedores</p>

<p>Tally Contractors</p>

<p>Trade Associations</p>

<p>Traders</p>

<p>Transport Intermediaries</p>

<p>Vendors</p>
</div>
</div>
</center>',
		       'publication_status' => 1,
		       'created_at' => new DateTime(),
		       'updated_at' => new DateTime()
		     ),
	     	array(
		       'menu_title' => 'Publications',
		       'short_description' => NULL,
		       'menu_content' => '<p id="myTitle">BEACHING OF SHIP: FORMALITIES</p>

<p>1. Change of name of the ship and registration of the ship with the port of easy registration</p>

<p>2. MOA between the owner and scrapper</p>

<p>3. Proforma Invoice is issued by the Ship owner</p>

<p>4. Shipowner appoints a local agent</p>

<p>5. Scrapper&#39;s Yard must have Certificate of Environment</p>

<p>6. NOC is to be collected from the Ministry of Industries by the scrapper</p>

<p>7. L/C to be opened by the scrapper</p>

<p>8. On arrival of the vessel the Local Agent shall submit a Declaration of Inward Vessel to the Deputy Traffic Manager (OP), CPA</p>

<p>9. IGM is submitted to Deputy Commissioner of Customs (Import) by the local agent enclosing MOA, LC, NOC and Environment Clearance&nbsp;</p>

<p>10. Local agent applies to the Assistant Commissioner of Customs or Revenue Officer, Preventive Services, Rummage Division, Customs House for booking Rummaging Officer</p>

<p>11. Rummage Officer submits report</p>

<p>12. Local Agent&#39;s bank issues Credit Advice</p>

<p>13. Local Agent applies to the Chief Finance &amp; Accounts Officer, CPA for issuance of Accounts NOC</p>

<p>14. Chief Finance and Accounts Officer issues NOC to the ship to leave the Port</p>

<p>15. Ship arrival report is jointly signed by the Master and Revenue Officer, Preventive Services, F Division, Customs House</p>

<p>16. Arrival Clearance issued by the Shipping Master, Govt. Shipping Office</p>

<p>17. Local agent issues NOR to the scrapper</p>

<p>18. Commodore, Superintendent Dock Yard, Bd Navy issues a Beaching Permission&nbsp;</p>

<p>19. Local agent and scrapper jointly signs Protocol of Physical Delivery and Acceptance</p>

<p>20. Deputy Conservator, Port Authority issues Beaching Permission to the local agent</p>

<p>21. Scrapper pays customs duties</p>

<p>22. Commissioner of Customs issues another beaching permission</p>

<p>23. Beaching Captain issues a beaching certificate</p>',
		       'publication_status' => 1,
		       'created_at' => new DateTime(),
		       'updated_at' => new DateTime()
		     ),
	     	array(
		       'menu_title' => 'Arrest and Release',
		       'short_description' => NULL,
		       'menu_content' => '<p id="myTitle">SHIP ARREST OR RELEASE IN BANGLADESH</p>

<ol>
	<li>The High Court Division of the Supreme Court of Bangladesh exercises Admiralty Jurisdiction under the Admiralty Court Act, 2000 and the Admiralty Rules, 1912. Admiralty Rules provide that in suits <em>in rem</em> a warrant for the arrest of property may be issued at the instance either of the plaintiff or of the defendant at any time after the suit has been instituted, but no warrant of arrest shall be issued until an affidavit by the party or his agent has been filed, and the following provisions complied with:-</li>
</ol>

<ol>
	<li>The affidavit shall state the name and description of the party at whose instance the warrant to be issued, the nature of claim or counter-claim, the name and nature of the property to be arrested, and that the claim or counter-claim has not been satisfied.</li>
	<li>In a suit of distribution of salvage the affidavit shall state the amount of the salvage money awarded or agreed to be accepted, and the name, address and description of the party holding the same.</li>
</ol>

<p>To file an application for arrest of ship the plaintiff/claimant must institute a suit by paying Tk. 1,00,000.00 as Court fee. In a suit for wages Court fee of Tk. 100.00 is required to be paid. The plaint along with the documents is to be filed in the section/office of the Court and the application for arrest of the ship is filed in the Court. Usually, the application comes up in the Daily Cause List of the court on the following working day. However, if the Court is satisfied with urgency of the matter it prepares a supplementary cause list and hears the matter on the same day. If <em>prima facie</em> case in made out in support of the claim the Court Admits the suit and directs issuance of summons. Thereafter, the application for arrest is heard and if the court is <em>prima facie</em> satisfied about the merit of the application it passes an order for arrest of the ship for security of the claim amount. An application for arrest of ship is heard exparte unless a caution/caveat has been filed by the defendants. Shipowners are advised to file a caveat when a ship calls on to any port of Bangladesh and apprehends litigation to prevent wrongful arrest by fraudulent claimants or to minimize the quantum of security. In practice undertaking to give sufficient security to satisfy the claim is not required to be filed along with the caution/caveat, though the Admiralty Rules provide for such an undertaking. The order for arrest of ship is served upon the defendants by the Marshal of the Court on receipt of costs and expenses paid by the claimant. Likewise, cargo on board or any property belonged to any party can also be arrested by the Admiralty Court.</p>

<p>The order for arrest can be vacated by the same court upon an application filed by the defendant on the ground that the ship was wrongly arrested. The defendants can also file an application for reduction of the quantum of security, but hearing of these kinds of application takes 1 or 2 weeks. When the ship is in hurry this kind of application is not generally advised. A ship is released from arrest upon deposit of the amount of claim in the Court or upon furnishing a local bank guarantee. An LOU issued by P &amp; I Club is not accepted in Bangladesh. After release of the ship upon furnishing bank guarantee an application for reduction of Bank guarantee can also be moved by the defendants, and if allowed a revised Bank guarantee would be furnished. The release order is also served by the Marshal upon receipt of Marshal&rsquo;s costs and expenses.</p>

<p>If the ship is not got released by the defendants, the plaintiff can pray for sale of the ship <em>pendente lite</em> and the Court sells the ship through auction and keeps the proceeds with the Marshal which is paid to the plaintiff if the suit is decreed in his favour. If there are more than one claimant and the proceeds cannot satisfy the claims Court applies the English Law of priorities. &nbsp; &nbsp;&nbsp;</p>

<ol>
	<li>Neither the International Convention relating to Arrest of Seagoing Ship 1952 nor the International Convention of the Arrest of Ships 1999 has been ratified by Bangladesh.&nbsp;</li>
	<li>A ship could also be arrested, by the plaintiff in execution of decree passed by the High Court Division or a judgment passed by a foreign Court against the Owner of the ship. Under the Code of Civil Procedure 1908 (popularly called CPC) a ship can also be attached before judgment in a suit <em>in personam</em>. In a suit <em>in rem</em>&nbsp;instead of arrest the Court can attach a ship before judgment if the ship is beached for scrap before institution of suit. Under the Bangladesh Merchant Shipping Ordinance (MSO) 1983 the Principal Officer, Mercantile Marine Department can detain an unseaworthy ship. Under the MSO the High Court Division can detain a foreign ship for damage caused in any part of the word to the Government of Bangladesh or any Bangladeshi citizen or company. This sort of detention being ordered upon an application no court fee is required to be paid and there is no time bar. The Principal Officer or Collector of Customs can detain a ship before such application has been made to the High Court Division. Under the Regulations for Working of Chittagong Port (Cargo and Container) 2001 the Chittagong Port Authority can detain a vessel until security has been given&nbsp;or the total amount is paid&nbsp;for the amount of damage caused and the Cost involved in removing the blockade of navigational channel.&nbsp;</li>
	<li>There is no separate freezing order other than arrest of a ship in an Admiralty proceeding or in an execution proceeding to enforce a decree. However, an order for injunction to restrain a party from scrapping or removing a ship can be passed by the Court.&nbsp;</li>
	<li>A ship could be arrested in an action <em>in rem</em> for any of the following claims:</li>
</ol>

<ol>
	<li>any claim to the possession or ownership of a ship or to the ownership of any share therein or for recovery of documents of title and ownership of a ship, including registration certificate, log book and such certificates as may be necessary for the operation or navigation of the ship;</li>
	<li>any question arising between the co-owners of a ship as to possession, employment or income of that ship;</li>
	<li>any claim in respect of a mortgage of or charge on a ship or any share therein;</li>
	<li>any claim for damage done by a ship;</li>
	<li>any claim for damage received by a ship;</li>
	<li>any claim for loss of life or personal injury sustained in consequence of any defect in a ship or in her apparel or equipment, or of the wrongful act, neglect or default of the owners, charterer or persons in possession or control of a ship or of the master or crew thereof or any other persons for whose wrongful acts, neglects or defaults the owners, charterers or persons in possession or control of ship are responsible, being an act, neglect or default in the navigation or management of the ship, in the loading, carriage or discharge of goods on, in or from the ship or in the embarkation, carriage or disembarkation of persons on, in or from the ship;</li>
	<li>any claim for loss of or damage to goods carried in a ship;</li>
	<li>any claim arising out of any agreement relating to the carriage of goods in a ship or to the use or hire of a ship;</li>
	<li>any claim in the nature of salvage of life from a ship or cargo or any property on board a ship or the ship itself or its apparel, whether services were rendered on the high sea or within territorial waters or inland waters or in a port, including any claim arising by virtue of the application by or under section 12 of the Civil Aviation Ordinance, 1960, (Ordinance XXXII of 1960) of the law relation to salvage to aircraft and their apparel and cargo;</li>
	<li>any claim in respect of towage of a ship or an aircraft;</li>
	<li>any claim in respect of pilotage of a ship or an aircraft;&nbsp;</li>
	<li>any claim in respect of goods or materials supplied to a ship for her operation or maintenance;</li>
	<li>any claim in respect of construction, repair or equipment of a ship or dock charges or dues;</li>
	<li>any claim for wages by a master or member of the crew of a ship or any claim for any money or property recoverable as wages of master or member of the crew under the Merchant Shipping Ordinance, 1983, hereinafter referred to as the Ordinance, or in the Court;</li>
	<li>any claim for disbursements made on account of or for the purpose of a ship by the Master, shipper, charterer or agent of the ship;</li>
	<li>any claim arising out of an act which is or is claimed to be a general average act;</li>
	<li>any claim arising out of bottomry or respondentia;&nbsp;</li>
	<li>any claim for forfeiture or condemnation of a ship or of goods which are being or have been carried, or have been attempted to be carried, or for the restoration of a ship or any such goods after seizure, or for droits of admiralty together with any other jurisdiction to grant reliefs as are provided under the provisions of the Merchant Shipping Ordinance.&nbsp;</li>
</ol>

<ol>
	<li>A ship could be arrested irrespective of her flag.&nbsp;</li>
	<li>As long as the claim gives rise to an action <em>in rem</em>, even if the ship belongs to a Foreign State the ship would be arrested. But the ships belonged to the Government of Bangladesh, Bangladesh Army, Bangladesh Navy, Bangladesh Air Force, Bangladesh Rifles, Bangladesh Police and Coast Guard are indemnified.&nbsp;</li>
	<li>A sister ship can be arrested in Bangladesh but an associated ship cannot be arrested. The Court can lift or pierce the corporate veil to determine the beneficial ownership of a ship.&nbsp;</li>
	<li>If the ship is on bare boat charter it can be arrested. When the ship is on time charter it can be arrested if there is maritime lien against the ship. If the claim arises during time charter ship could be arrested as long as the charterer is in control of the vessel.&nbsp;</li>
	<li>Counter security is not required to be furnished at the time when the Court orders the arrest of a ship. However, the code of Civil Procedure provides that where, at any stage of the suit, it appears to the Court that a sole plaintiff is, or (when there are more plaintiffs than one) that all the plaintiffs are residing out of Bangladesh, and that such plaintiff does not, or that no one of such plaintiffs does, possess any sufficient immovable property within Bangladesh other than the property in suit, the Court may, either of its own motion or on the application of any defendant, order the plaintiff or plaintiffs, within a time fixed by it, to give security for the payment of all costs incurred and likely to be incurred by any defendant.&nbsp;</li>
	<li>If the plaintiff&rsquo;s claim is a maritime lien, the claim survives notwithstanding the change in ownership of a ship and the ship can be subjected to arrest. If the claim is a maritime claim and not a maritime lien the ship cannot be arrested if before filing of the suit ownership of the ship has changed.&nbsp;</li>
	<li>Sections 477 and 478 of the MSO recognize maritime liens to the Seaman&rsquo;s wages and the Master&rsquo;s wages respectively. No other statute recognizes maritime Liens. However, Court follows English law of maritime liens.&nbsp;</li>
	<li>After receipt of file/documents along with Power of Attorney 48 hours time is required to obtain an order of arrest.&nbsp;</li>
	<li>Power of Attorney executed by the client, notarized and attested by the Bangladesh High Commission in the plaintiff&rsquo;s country is required to be filed along with other documents to prove the claim. But the Court permits to file suit by dint of the scanned copy of the Power of Attorney subject to filing the original after authentication by the Ministry of Foreign Affairs and payment of stamp duty.&nbsp;</li>
	<li>All documents in support of the claim along with correspondence between the parties are required to be filed at the time of filling the suit and application for arrest. Original documents are required to be filed at the time of trial.&nbsp;</li>
	<li>Court usually accepts jurisdiction over the substantive claim once the vessel has been arrested. However, the Court may refrain from adjudicating the substantive claim if any agreement of jurisdiction stipulates for foreign jurisdiction. In case of pendency of maritime arbitration, court maintains the arrest order for the purpose of security and stays the substantive suit.&nbsp;</li>
	<li>After the expiration of 12 days from the return of a warrant if no appearance shall have been entered in the suit, the attorney for the plaintiff may cause the suit to be sent down for hearing on merit. But when the defendants enter appearance and contest the suit it takes 3 to 4 years to adjudicate the suit on merit.&nbsp;</li>
	<li>The Court does not acknowledge the concept of wrongful arrest for the purpose of counter security but it can vacate the order for arrest of ship on the ground of wrongful arrest. The court can award costs of the suit against the losing party. Moreover, if in any suit the defendant objects the claim on the ground that the claim or defence is false or vexatious and if thereafter, such claim or defence is disallowed the Court shall make an order for the payment to the objector, such cost by way of compensation which may extend upto twenty thousand taka.&nbsp;</li>
	<li>The Court does acknowledge the principles of piercing and lifting of the corporate veil. In order to obtain arrest by piercing the corporate veil, one need to establish that it is a deliberate attempt on the part of the ship owner to create different entities to avoid legal liabilities. If independent legal entities have been established in the normal course of business the Court would be reluctant to pierce the corporate veil for the purpose of issuing an order of arrest.&nbsp;</li>
	<li>Ship can be sold <em>pendente lite</em>. The process of sale could be completed within 2 to 3 months from the date of the order of arrest. It could take longer period if any aggrieved party challenges either the order of arrest or the order of sale before the same Court or before the superior Court.</li>
</ol>',
		       'publication_status' => 1,
		       'created_at' => new DateTime(),
		       'updated_at' => new DateTime()
		     ),
	     	array(
		       'menu_title' => 'Caution',
		       'short_description' => NULL,
		       'menu_content' => '<p id="myTitle">FILE CAUTION/CAVEAT AND PREVENT MARITIME FRAUD:</p>
<p>Every ship heading to any port of Bangladesh and anticipating litigation should file a caveat/caution for two main reasons. Firstly, to prevent wrongful arrest by a fraudulent claimant and, secondly, to minimize the amount of security for release of ship giving the actual picture to the Court.</p>

<p>Now a days Bangladesh Court does not require any undertaking along with the caveat/caution, though the Admiralty Rules provide for such an undertaking.&nbsp;</p>',
		       'publication_status' => 1,
		       'created_at' => new DateTime(),
		       'updated_at' => new DateTime()
		     ),
	     	array(
		       'menu_title' => 'Verdicts',
		       'short_description' => NULL,
		       'menu_content' => '<p id="myTitle">SOME VERDICTS GIVEN IN OUR CASES:</p>

<p>1. <a href="http://shiplawbd.com/images/SHIP_LAW/DOWNLOAD/Order-passed-in-the-case-of-BCIC-v-MV-THOR-NEXUS.pdf" target="_blank">Judgment passed in the case of BCIC v&nbsp; MV THOR NEXUS</a></p>

<p>2. <a href="http://shiplawbd.com/images/SHIP_LAW/DOWNLOAD/Order%20passed%20in%20the%20case%20of%20MT%20OCEAN%20VICTORY.pdf" target="_blank">Order passed in the case of MT OCEAN VICTORY</a></p>

<p>3.&nbsp; <a href="http://shiplawbd.com/images/SHIP_LAW/DOWNLOAD/down_7.pdf" target="_blank">Judgment passed in the cases of OCEAN GALAXY and OCEAN DAWNING</a></p>

<p>4.&nbsp;<a href="http://shiplawbd.com/images/SHIP_LAW/DOWNLOAD/down-9.pdf" target="_blank">Judgment by Appellate Division in Rich Step Case</a></p>

<p>5. <a href="http://shiplawbd.com/images/SHIP_LAW/DOWNLOAD/Xin%20Sheng%20Shipping%20vs%20M.%20V.%20Atiqur%20%20Rahman-Rejection%20of%20Application%20for%20Addition%20of%20Party.pdf" target="_blank">Xin Sheng Shipping vs M. V. Atiqur&nbsp; Rahman-Rejection of Application for Addition of Party</a></p>

<p>6. <a href="http://shiplawbd.com/images/SHIP_LAW/DOWNLOAD/down_8.pdf" target="_blank">Order passed in the case of BCIC v Courageous Shipping &amp; Trading SA</a></p>

<p>7. <a href="http://shiplawbd.com/images/SHIP_LAW/DOWNLOAD/Down_11-Order passed in the case of Md.  Anwar Hossain Mazumder vs M V U Happy and others 1.pdf" target="_blank">Order passed in the case of Md. Anwar Hossain Mazumder vs M V U Happy and others</a></p>

<p>8.&nbsp;<a href="http://shiplawbd.com/images/SHIP_LAW/DOWNLOAD/down_9aa.pdf" target="_blank">Judgment passed in the case of New Champ Vs M. V. Ocean Galaxy</a></p>

<p>9.&nbsp;<a href="http://shiplawbd.com/images/SHIP_LAW/DOWNLOAD/down_14.pdf" target="_blank">Order passed in Neptune Ship Management (Pte.) Ltd. vs M T GAGASAN JOHOR and others</a></p>

<p>10. <a href="http://shiplawbd.com/images/SHIP_LAW/DOWNLOAD/Order passed in the case of Bunkers  Marine Pte Ltd. vs M. V. GSM02.pdf" target="_blank">Order passed in the case of Bunkers Marine Pte Ltd. vs M. V. GSM02</a></p>

<p>11.&nbsp;<a href="http://shiplawbd.com/images/SHIP_LAW/DOWNLOAD/Down_10-Chief Justice Appointment Case.pdf" target="_blank">Chief Justice Appointment Case</a></p>',
		       'publication_status' => 1,
		       'created_at' => new DateTime(),
		       'updated_at' => new DateTime()
		     ),
	     	
		   ));
		} 
		else 
		{ 
			echo "\e[31mTable is not empty, therefore NOT "; 
		}

		// ============================= Create pages Table ============================
    	if(DB::table('create_pages')->get()->count() == 0)
    	{
			$pages = DB::table('create_pages')->insert(array(
		     array(
		       'page_title' => 'Admiralty Court Act 2000',
		       'short_description' => NULL,
		       'page_content' => '<p id="myTitle"><strong>THE ADMIRALTY COURT ACT, 2000</strong></p>

<p id="subTitle"><strong>(Act No. 43 of 2000)</strong></p>

<p>An Act to repeal and re-enact the laws relating to Admiralty Jurisdiction.</p>

<p>Whereas it is expedient to repeal and re-enact the laws relating to admiralty jurisdiction;</p>

<p>It is hereby enacted as follows:-</p>

<p><strong>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Short title:</strong> This Act may be called the Admiralty Court Act, 2000.</p>

<p><strong>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Definitions:</strong> In this Act, unless there is anything repugnant in the subject or context,-</p>

<ol>
	<li>&ldquo;<strong>Inland waters&rdquo;</strong> includes any part of the sea adjacent to the coast of Bangladesh as may be notified by the Government to be waters falling by international law to be within the territorial sovereignty of Bangladesh apart from the part of the sea under international law relating to territorial waters;</li>
	<li><strong>&ldquo;Ship&rdquo;</strong> means and includes any description of vessel used in navigation;</li>
	<li><strong>&ldquo;Goods&rdquo;</strong> means and includes baggage;</li>
	<li><strong>&ldquo;Republic&rdquo;</strong> means the People&rsquo;s Republic of Bangladesh;</li>
	<li><strong>&ldquo;Port&rdquo;</strong> means any port, harbour, river, estuary, haven, dock, canal or other such place where a person or body of persons is to collect charges having been empowered by or under any law;</li>
	<li><strong>&ldquo;Port Limit&rdquo;</strong> means the limits of ports as fixed by or under law;</li>
	<li><strong>&ldquo;Aircraft&rdquo;</strong> means any craft which can drive support in the atmosphere from reactions of the air, and includes balloons, whether captive or free, airships, kites, gilders and flying machines;</li>
	<li><strong>&ldquo;Master&rdquo;</strong> means any person except a pilot or harbour master having the charge or control of a ship;</li>
	<li><strong>&ldquo;Territorial Waters&rdquo;</strong> means the limits of sea beyond the land territory as is declared by the Government from time to time and the outer internal water measured from the baseline;</li>
	<li><strong>&ldquo;Supreme Court&rdquo;</strong> means the Supreme Court of Bangladesh established by Article 94 of the Constitution of the People&rsquo;s Republic of Bangladesh;</li>
	<li><strong>&ldquo;High Court Division&rdquo;</strong> means the High Court Division of the Supreme Court;</li>
	<li><strong>&ldquo;Chief Justice&rdquo;</strong> means the Chief Justice of Bangladesh.</li>
</ol>

<p>&nbsp;</p>

<p><strong>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Admiralty jurisdiction of the High Court Division:</strong> (1) The High Court Division shall be a Court of Admiralty.</p>

<p>(2) The Admiralty Court shall have jurisdiction to hear and determine any of the following questions or claims:</p>

<ol>
	<li>any claim to the possession or ownership of a ship or to the ownership of any share therein or for recovery of documents of title and ownership of a ship, including registration certificate, log book and such certificates as may be necessary for the operation or navigation of the ship;</li>
	<li>any question arising between the co-owners of a ship as to possession, employment or income of that ship;</li>
	<li>any claim in respect of a mortgage of or charge on a ship or any share therein;</li>
	<li>any claim for damage done by a ship;</li>
	<li>any claim for damage received by a ship;</li>
	<li>any claim for loss of life or personal injury sustained in consequence of any defect in a ship or in her apparel or equipment, or of the wrongful act, neglect or default of the owners, charterer or persons in possession or control of a ship or of the master or crew thereof or any other persons for whose wrongful acts, neglects or defaults the owners, charterers or persons in possession or control of ship are responsible, being an act, neglect or default in the navigation or management of the ship, in the loading, carriage or discharge of goods on, in or from the ship or in the embarkation, carriage or disembarkation of persons on, in or from the ship;</li>
	<li>any claim for loss of or damage to goods carried in a ship;</li>
	<li>any claim arising out of any agreement relating to the carriage of goods in a ship or to the use or hire of a ship;</li>
	<li>any claim in the nature of salvage of life from a ship or cargo or any property on board a ship or the ship itself or its apparel, whether services were rendered on the high sea or within territorial waters or inland waters or in a port, including any claim arising by virtue of the application by or under section 12 of the Civil Aviation Ordinance, 1960, (Ordinance XXXII of 1960) of the law relation to salvage to aircraft and their apparel and cargo;</li>
	<li>any claim in respect of towage of a ship or an aircraft;</li>
	<li>any claim in respect of pilotage of a ship or an aircraft;&nbsp;</li>
	<li>any claim in respect of goods or materials supplied to a ship for her operation or maintenance;</li>
	<li>any claim in respect of construction, repair or equipment of a ship or dock charges or dues;</li>
	<li>any claim for wages by a master or member of the crew of a ship or any claim for any money or property recoverable as wages of master or member of the crew under the Merchant Shipping Ordinance, 1983, hereinafter referred to as the Ordinance, or in the Court;</li>
	<li>any claim for disbursements made on account of or for the purpose of a ship by the Master, shipper, charterer or agent of the ship;</li>
	<li>any claim arising out of an act which is or is claimed to be a general average act;</li>
	<li>any claim arising out of bottomry or respondentia;&nbsp;</li>
	<li>any claim for forfeiture or condemnation of a ship or of goods which are being or have been carried, or have been attempted to be carried, or for the restoration of a ship or any such goods after seizure, or for droits of admiralty together with any other jurisdiction to grant reliefs as are provided under the provisions of the said Ordinance or any other jurisdiction which was vested in the High Court Division as a Court of Admiralty immediately before the commencement of this Act and any other jurisdiction as to any matter in connection with ships or aircraft which has by custom been exercised by the High Court Division as a Court of Admiralty.</li>
</ol>

<p>(3) The jurisdiction of the Court of Admiralty in case of a ship, under Sub-Section (2)(b) includes power to settle any account outstanding and unsettled between the parties in relation to the ship, and to direct that the ship, or any share thereof, shall be sold, and to make such other order as the Court thinks fit.</p>

<p>(4)&nbsp; The reference in sub-section (2)(i) to claim in the nature of salvage includes a reference to such claims for services rendered in saving life from a ship or an aircraft of in preserving cargo, apparel or wreck as, under any law for the time being in force, are authorized to be made in connection with a ship or an aircraft.</p>

<p>(5)&nbsp; The preceding provisions of this section shall apply-</p>

<p>(a)&nbsp; in relation to all ship or aircraft, whether Bangladeshi or not and whether registered or not and wherever the residence or domicile of their owners may be;</p>

<p>(b)&nbsp; in relation to all claims, irrespective of the plaice of claim, claims relating to salvage or cargo or wreck or cargo or wreck found on the ground; and</p>

<p>(c)&nbsp; in relation to mortgage and charge, to all legal and equitable mortgages or charges, including mortgages and charges created under foreign law whether registered or not:</p>

<p>&nbsp; Provided that, nothing in this sub section shall be deemed to be applicable to money or property recoverable under the said Ordinance.</p>

<p><strong>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mode of exercise of Admiralty Jurisdiction of the High Court Division as the Court of Admiralty:</strong> (1) Subject to the provisions of section 5, the admiralty jurisdiction of the High Court Division may in all cases be exercised in <em>personam</em>.</p>

<p>(2) In relation to claims mentioned in clauses (a) to (c) and (r) of sub section 2 of section 3 the Admiralty Jurisdiction of the High Court Division as the Court of Admiralty may be exercised through <em>action in rem</em> against the ship or property in question.</p>

<p>(3) When the amount claimed relates to any ship, aircraft or any other property over which there is a maritime lien or other charge, the Admiralty Jurisdiction of the High Court Division as the Court of Admiralty may be exercised through an <em>action in rem</em> against that ship, aircraft or property.</p>

<p>(4) In relation to the claims mentioned in clauses (d) to (q) of sub section 2 of section 3, relating to any ship, the person who would be liable for the claim in an action in <em>personam</em> was, when the cause of action arose, as the owner or charterer of, or person in possession or in control of, the ship, whether the claim gives rise to a maritime lien on the ship or not, an <em>action in rem</em> can be brought in the Admiralty Jurisdiction of the High Court Division as the Court of Admiralty against the following ships, namely-</p>

<p>(a)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if at the time when action is brought, the person has beneficial ownership over all the shares of the ship; or&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p>(b)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if at the time when action is brought, any other ship is under the beneficial ownership of the said person.</p>

<p>(5) &nbsp;In the case of claim for fee for towage or pilotage of any aircraft the Admiralty Jurisdiction of the High Court Division as the Court of Admiralty may be invoked by an <em>action in rem </em>against the aircraft if at the time when the action is brought it is beneficially owned by the person who would be liable for the claim in an <em>action in personam.</em></p>

<p>(6) Notwithstanding anything contained in the preceding clauses of the section, an action in rem shall not be brought in the Admiralty Jurisdiction of the High Court Division as the Court of Admiralty for any claim mentioned in clause (n) of sub section (2) of section 3 unless the claim relates wholly or partly to wages. &nbsp;</p>

<p>(7) When the High Court Division exercising its jurisdiction as the Court of Admiralty orders any ship, aircraft or any other property to be sold, the said Division exercising the same jurisdiction can hear and determine any question as to the priority of title or claim in the proceeds of sale.</p>

<p>(8) For the purpose of sub sections (4) and (5) to determine as to whether a person would be liable in an <em>action in personam</em> it shall be assumed that the said person ordinarily resides in Bangladesh or his place of business is situated in Bangladesh</p>

<p>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>In <em>personam</em> jurisdiction of the Court in case of collision and other similar cases:</strong> (1) No court in Bangladesh shall entertain an action in <em>personam</em> to enforce any claim to which this section applies, unless-</p>

<p>(a)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; the ordinary residence or place of business of the Defendant is in Bangladesh; or</p>

<p>(b)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; the cause of action arises in the inland or territorial waters of Bangladesh or within the limits of a port of Bangladesh; or</p>

<p>(c)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; any action arising out of same incident or series of incidents is pending in the said court or the suit has been decided after hearing.</p>

<p>(2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No court in Bangladesh shall entertain any action in <em>personam</em> to enforce a claim to which this section applies, unless any action previously brought by the plaintiff in any court outside Bangladesh against the same defendant and in respect of the same incident or series of incidents has been withdrawn or otherwise disposed of.</p>

<p>(3)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; the preceding provisions of this section as applicable to action in <em>personam</em> shall apply to counterclaims not being counterclaims in proceedings arising out of the same incident or series of incidents, but the plaintiff and the defendant shall mean, respectively, the plaintiff and the defendant of the counterclaim.</p>

<p>(4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The preceding provisions of this section shall not apply to any suit or counterclaim if the defendant of the suit or counterclaim accepts or agrees to accept the jurisdiction of the court.</p>

<p>(5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Subject to the provisions of sub-section (2), the High Court Division as the Court of Admiralty shall have jurisdiction to entertain an action in <em>personam</em> to enforce all claims to which this section applies when any of the conditions specified in sub-section (1) is satisfied.</p>

<p>&nbsp;(6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This section shall apply to claims for damage, loss of life or personal injury arising out of a collision between ships or the carrying out of or omission to carry out a manoevure in the case of one or more ships or non compliance, on the part of one or more ships, with the regulations made under the said Ordinance.</p>

<p>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Suit to be instituted by plaint:</strong> A suit shall be instituted in the Admiralty Jurisdiction of the High Court Division as the Court of Admiralty by a plain framed, signed and verified according to the provisions of the Code of Civil Procedure 1908 (Act V of 1908), but in the case of <em>action in rem</em> the defendant may, subject to such variation as the circumstances may require, be described as &ldquo;the owners and parties interested in&rdquo; instead of the name of the ship &nbsp;or other property against which the suit is brought.</p>

<p>7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Court Fees:</strong> (1) Subject to the provisions of sub section (2) of this section, the provisions of the Court Fees Act, 1870 (Act VII of 1870) shall apply mutatis mutandis to all kinds of <em>action in rem</em> or <em>action in personam</em> suits or claims, brought in the Admiralty Jurisdiction of the High Court Division:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Provided that, notwithstanding any contrary provision in the Court Fees Act, 1870 (Act VII of 1870), in the case of all claims except the claim mentioned in clause (n) of sub section (2) of section 3 of this Act the maximum Court fees shall be not more than taka 1,00,000 (one lac) and in the case of claim under clause (n) Court fees of taka 100 (one hundred) shall be given.</p>

<p>8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Suit <strong>to be admitted, heard and disposed of by a Bench of Single Judge:</strong> Every suit under this Act shall be brought before, heard and disposed of by a Bench of Single Judge of the High Court Division in its Admiralty jurisdiction:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Provided that, the Chief Justice may constitute a Bench of two or more judges to hear and dispose of any suit under this Act.</p>

<p>9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Indemnity:</strong> Nothing in this Act shall give any right to bring an action in <em>rem</em> for any claim against the Republic or to arrest, detain or sale any ship or aircraft of the Army, Navy, Air force of the Republic, Bangladesh Rifles, Bangladesh Police or Coast Guard.&nbsp;</p>

<p>10.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Publication of text translated in English:</strong> After coming into force of this Act, the Government shall, by notification in the Official Gazette, publish an authentic text of this Act translated in English, which shall be called as the Authentic English Text of this Act.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Provided that, in the event of any conflict between this Act and the English text, this Act shall prevail.</p>

<p>11.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Power to make Rules:</strong> The Supreme Court may, with the prior approval of the President and by publication in the Official Gazette make rules for the purpose of giving effect to the provisions of this Act.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Provided that, until rules are framed under this section, the rules existing immediately before this Act coming into force, shall be in force subject to being in conformity with the provisions of this Act.</p>

<p>12.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Repeals and saving: </strong>(1) The Courts of Admiralty Act, 1891 (XVI of 1891) is hereby repealed and the applicability of the Admiralty Court Act, 1840 (3 &amp; 4. Vict. c. 65), the Admiralty Court Act, 1861 (24 &amp; 25 Vict, c. 10) shall be deemed to have been repealed in respect of the Republic.</p>

<p>&nbsp; &nbsp; &nbsp; (2) Notwithstanding the repeal or deeming to have been repealed of the laws under Sub Section (1), as the case may be, the suits instituted under the repealed laws which were &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; awaiting disposal on the date of such repeal or deeming to have been repealed shall remain pending, as if no provision were made repealing or deeming to have been repealed such laws.</p>',
		       'publication_status' => 1,
		       'created_at' => new DateTime(),
		       'updated_at' => new DateTime()
		     ),
		     array(
		       'page_title' => 'Admiralty Court Rules 1912',
		       'short_description' => NULL,
		       'page_content' => '<p id="myTitle">FOR REGULATING THE PROCEDURE AND PRACTICE IN CASES BROUGHT BEFORE</p>

<p id="myTitle">THE HIGH COURT OF JUDICATURE AT FORT WILLIAM IN BENGAL</p>

<p id="myTitle">UNDER THE COLONIAL COURTS OF ADMIRALTY ACT, 1890</p>

<p>&nbsp;</p>

<p id="subTitle">Admiralty Rules 1912</p>

<p><strong>1. Meaning of certain terms used in these rules:-</strong> In the construction of these rules&nbsp; the&nbsp; following terms shall (if not inconsistent with the context or subject matter) have the respective meanings hereinafter&nbsp; assigned&nbsp; to them; that is to say:</p>

<p>&nbsp; <strong>&ldquo;The Court&rdquo;</strong> shall mean the High Court at Calcutta.</p>

<p>&nbsp; <strong>&ldquo;Judge&rdquo;</strong> shall mean a Judge of the said Court.</p>

<p><strong>&nbsp; &ldquo;Registrar&rdquo;</strong> shall mean the Registrar of the said Court, on its Original Side, or other officer authorised to perform the duties of such Registrar.</p>

<p><strong>&nbsp; &ldquo;Registry&rdquo;</strong> shall mean the office of the Registrar.</p>

<p><strong>&nbsp; &ldquo;Marshal&rdquo;</strong> shall mean the Marshal or his substitute or substitutes or other officer who may be appointed by the Chief Justice to execute the process of the Court.</p>

<p><strong>&nbsp; &ldquo;Attorney&rdquo;</strong> shall mean any Attorney entitled to practice in the said Court, or the party himself if conducting his suit in person.</p>

<p><strong>&nbsp; &ldquo;Suit&rdquo;</strong> shall mean any suit, action, or other proceeding instituted in the said Court in its jurisdiction under the Colonial Courts of Admiralty Act.</p>

<p><strong>&nbsp; &ldquo;Affidavit&rdquo;</strong>&nbsp;&nbsp; shall, in addition to its ordinary meaning, include a statement in writing on solemn affirmation wherever by law a person may make a solemn affirmation instead of an oath.&nbsp;</p>

<p>2. <strong>Operation of the Rules.-</strong>&nbsp; These rules shall, if previously approved by His Majesty in Council, come into operation on a day to be fixed by the Court and shall apply to all suits instituted on and after that day.</p>

<p>3. <strong>Institution of suits.</strong>- A suit shall be instituted&nbsp; by a plaint drown up, subscribed and verified according to the provisions of the Code of Civil Procedure, save that&nbsp; if the suit is in <em>rem</em> the defendants may (subject&nbsp; to such variations as the circumstances may require) be described&nbsp; as &ldquo;the owners and parties interested in&rdquo; the vessel or other property proceeded against instead by name.</p>

<p>4. <strong>Arrest warrant after affidavit.-</strong>&nbsp; In suits in <em>rem</em> a warrant for the arrest of property may be issued at the instance either of the plaintiff or of the defendant at any time after the suit has been instituted, but no warrant of arrest shall be issued until an affidavit by the party or his agent has been filed, and the following provisions complied with:-</p>

<p>&nbsp;&nbsp;&nbsp; a) The affidavit shall state the name and description of the party at whose instance the warrant to be issued, the nature of claim or counter-claim, the name and nature of the property to be arrested, and that the claim or counter-claim has not been satisfied.</p>

<p>&nbsp;&nbsp;&nbsp; b)&nbsp; In a suit of wages or of possession the affidavit shall state the national character of the vessel proceeded against; and if against a foreign vessel, that notice of the institution of the suit has been given to the Counsel of the state to which the vessel belongs, if there is one resident in Calcutta and a copy of the notice shall be annexed to the affidavit.</p>

<p>&nbsp;(c)&nbsp; In a suit of bottomry&nbsp; the bottomry bond, and in a foreign language also a notarial translation thereof, shall&nbsp; be produced for the inspection and perusal of the Registrar, and a copy of the bond, or of the translation thereof, certified to be correct shall be annexed to the affidavit.</p>

<p>(d)&nbsp; In a suit of distribution of salvage the affidavit shall state the amount of the salvage money awarded or agreed to be accepted, and the name, address and description of the party holding the same.</p>

<p>5. <strong>&nbsp;Warrant may issue before affidavit by leave.</strong>-&nbsp; The Court or a Judge may in any case, if they or he thinks fit, allow the warrant to issue, although the affidavit in rule 4 mentioned may not contain all the required particulars, and in a suit of wages the Court or Judge may also waive the service of the notice, and in a suit of bottomry the production of the bond.</p>

<p>6. <strong>&nbsp;Suit in <em>rem</em>. When service not required.- </strong>&nbsp;In suits in <em>rem</em> no service of writ or warrant shall be required when the attorney of the defendant waives service and&nbsp; undertake in writing to appear and to give security or to pay money into Court&nbsp; in lieu of security.</p>

<p>7.&nbsp; <strong>Attorney not&nbsp; entering appearance.-</strong> An attorney not entering appearance or giving security or paying money into Court in lieu of security in a suit in <em>rem</em> in pursuance of his written undertaking so to do shall be liable at attachment.</p>

<p>8. <strong>Service. By whom made.</strong> &ndash; Every writ, warrant and possess shall be served by the Marshal or his substitute. Every warrant shall be returned to the Registry within six days from the date thereof.</p>

<p>9. <strong>Service how effected.-</strong> In suits in <em>rem</em> service of summons or warrant against ship, freight or cargo on board, is to be effected by nailing or affixing the original writ or warrant for a short time on the main mast or on the single mast of the vessel and by taking off the process, leaving a true copy of it nailed or affixed in its place.</p>

<p>10. <strong>Service how affected on cargo landed.</strong> _ If the cargo has been landed or transshipped, service of the writ or warrant to arrest the cargo and freight shall be effected by placing the writ of summons or warrant for a short time on the cargo and by, on taking off the process, leaving a true copy upon it.</p>

<p>11. <strong>Service on cargo in custody of third party.</strong> &ndash; If the cargo be in the custody of a person who will not permit access to it, service of the writ or warrant may be made upon the custodian.</p>

<p>12. <strong>Intervening in suits in <em>rem</em>. &ndash;</strong> In a suit in <em>rem</em> any person not named in the writ may intervene and appear on filing an affidavit showing that he is interested in the property under arrest or in the fund in the Registry.</p>

<p>13. <strong>Suits in <em>rem</em> by default.</strong> &ndash; After the expiration of 12 days from the return of a warrant if no appearance shall have been entered in the suit, the attorney for the plaintiff may cause the suit to be sent down for hearing.</p>

<p>14. <strong>Judgment for the claim if well founded.</strong> &ndash; If when the suit comes before the Court, the Judge is satisfied that the plaintiff&rsquo;s claim is well founded, he may pronounce for the claim and may order the property to be sold with or without previous notice and the proceeds paid into the Registry or may make such order in the premises as he shall think just.</p>

<p>15. <strong>Entry of appearance.</strong> &ndash; An attorney desiring to enter an appearance in any suit, shall file in the Registry a praecipe, a copy of which shall have been previously served on the adverse attorney.</p>

<p>16. <strong>Contents of praecipe. </strong>&ndash; The praecipe shall contain the name of the attorney and an address in Calcutta at which it shall be sufficient to leave all instruments and documents in the suit.</p>

<p>17. <strong>Security.</strong> &ndash; Where security is to be given in the Registry, it shall be given according to the rules and practice of the Court as to security in the case of an attachment before judgment in an ordinary Civil suit.</p>

<p>18. <strong>Release.</strong> &ndash; Property arrested by warrant shall only be released under the authority of an instrument issued by the Registrar, to be called a &ldquo;release&rdquo;.</p>

<p>19. <strong>Release before appearance entered on praecipe.-</strong> An attorney at whose instance any property has been arrested may, before an appearance has been entered, obtain the release thereof by filing a praecipe to withdraw the warrant.</p>

<p>20. <strong>On payment into Registry release of property.</strong> &ndash; An attorney may obtain the release of any property by paying into the Registry the sum in which the suit has been instituted.</p>

<p>21. <strong>Release of cargo arrested for freight, on payment.</strong> &ndash; Cargo arrested for the freight only, may be released by an order of a Judge in Chambers upon proof by affidavit of the value of the freight and by paying the amount of the freight into the Registry.</p>

<p>22. <strong>Value of property under arrest in salvage suit.-</strong> In a suit of salvage the value of the property under arrest shall be agreed to or proved by affidavit to the satisfaction of a Judge in Chambers before the property is released.</p>

<p>23. <strong>On security or payment into Registry property arrested released.-</strong> Where security shall have been given in the sum in which the suit has been instituted or such sum shall have been paid into the Registry, and if the suit be one of salvage the value of the property arrested shall have been proved to the satisfaction of a Judge in Chambers, an attorney shall be entitled to a release for the same unless there be a Caveat against the release thereof outstanding in the &ldquo;Caveat Release Book&rdquo;.</p>

<p>24. <strong>Release by Marshal on lodging praecipe with release.-</strong> The release, when obtained shall be left with a praecipe in the office of the Marshal by the attorney [or Advocate on record] taking out the same, who shall also at the same time pay all costs, charges and expenses attending the care and custody of the property whilst under arrest [ as prescribed in the schedule] and the Marshal shall thereupon release the property.</p>

<p>25. <strong>Caveat against release.-</strong> Attorney in a suit desiring to prevent the release of any property under arrest, shall file in the Registry a praecipe, and thereupon a Caveat against the release of the property shall be entered in a book to be kept in the Registry called the &ldquo;Caveat Release Book&rdquo;.</p>

<p>26. <strong>Penalty for delaying release.-</strong> A party delaying the release of any property by the entry of a Caveat shall be liable to be condemned in cost and damages, unless he shall show, to the satisfaction of the Court or a Judge, good and sufficient reason for having so done.</p>

<p>27. <strong>Caveat against arrest warrant.-</strong> The party desiring to prevent the arrest of any property may cause a Caveat against the issue of a warrant for the arrest thereof to be entered in the Registry.</p>

<p>28. <strong>Caveat Warrant Book.-</strong> For this purpose he shall cause to be filed in the Registry, a notice, signed by himself or his attorney, undertaking to enter an appearance in any suit that may be instituted against the said property, and to give security in such suit in a sum not exceeding an amount to be stated in the notice, or to pay such sum into the Registry, and a Caveat against the issue of a warrant for the property thereupon be entered in a book to be kept in the Registry called the &ldquo;Caveat Warrant Book&rdquo;.</p>

<p>29. <strong>Search for Caveat before issue of Arrest Warrant.-</strong> Before issuing a warrant for the arrest of the property, the Registrar shall ascertain whether or not any Caveat has been entered against the issue of a warrant for the arrest thereof.</p>

<p>30. <strong>&nbsp;Service of plaint on party entering Caveat.-</strong> An attorney instituting a suit against any property in respect of which a Caveat has been entered in the Caveat Warrant Book shall forthwith serve a copy of the plaint upon the party on whose behalf the Caveat has been entered or upon his attorney.</p>

<p>31. <strong>Security.-</strong> Within three days from the service of a copy of the plaint the party on whose behalf the Caveat has been entered shall, if the sum in which the suit has been instituted does not exceed the amount for which he has undertaken, give security in the sum in which the suit has been instituted or pay the same into the Registry.</p>

<p>32. <strong>On default, suit may proceed. </strong>&ndash; After the expiration of twelve days from the service of a copy of the plaint, if the party on whose behalf the Caveat has been entered shall not have given security in such sum, or paid the same into the Registry, the plaintiff&rsquo;s attorney may proceed with the suit by default, and have it heard: Provided that the Court may, on good cause shown and on such terms as to payment of costs as it may impose, extend the time, for giving security or paying the money into the Registry.</p>

<p>33. <strong>Judgment for claim, enforcement of payment.-</strong> If when the suit comes before the Court it is satisfied that the claim is well founded, it may pronounce for the amount which appears to be due, and may enforce the payment thereof by order and attachment against the party on whose behalf the Caveat has been entered, and by the arrest of the property if it then be or thereafter come within the jurisdiction of the Court.</p>

<p>34. <strong>Notwithstanding Caveat property may be arrested. </strong>&ndash; The preceding rules shall not prevent an attorney from taking out a warrant for the arrest of any property, notwithstanding the entry of a Caveat in the &ldquo;Caveat Warrant Book&rdquo;, but the party at whose instance any property in respect of which a Caveat is entered shall be liable to be condemned in costs and damage, unless he shall show, to the satisfaction of the Court, good and sufficient reason for having so done.</p>

<p>35. <strong>Sales by order of the Court.-</strong> Every sale under the decree of the Court shall, unless the Judge shall otherwise order, be made by the Marshal in like manner as a sale of moveable property in execution of a decree in any ordinary Civil suit.</p>

<p>36. <strong>Procedure by Marshal on sale of property.</strong>- The Marshal shall pay into Court the gross proceeds of sale of any property sold by him, and shall at the same time bring into the Registry the Account of sale, with vouchers in support thereof, for taxation by the Taxing Officer of the Court, to whom the same shall be transmitted by the Registrar for that purpose.</p>

<p>37. <strong>Audience before Taxing Office.-</strong> Any person interested in the proceeds, may be heard before the Taxing Officer on the taxation of the account of expenses and an objection to the taxation shall be heard in the same manner as an objection to the taxation of any attorney&rsquo;s bill of costs.</p>

<p>38. <strong>Payment of monies.</strong>- All money paid into Court shall be paid to the Registrar.</p>

<p>39. <strong>Payment out of monies.</strong> &ndash; Money paid into Court shall not be paid out of Court, except in pursuance of an order of the Court or a Judge.</p>

<p>40. <strong>Security for latent demands.</strong>- Security for latent demands shall not, unless the Judge shall otherwise order, be required on the payment of money out of Court.</p>

<p>41. <strong>Notice against payment.</strong> <strong>Caveat payment Book.</strong>- An attorney desiring to prevent the payment of monies out of the Registry shall file a notice and thereupon a Caveat shall be entered in a Book, to be kept in the Registry called the &ldquo;Caveat Payment Book&rdquo;.</p>

<p>42. <strong>Applications.</strong>- Applications may be made either in Court or to a Judge in Chambers.</p>

<p>43. <strong>Praecipe.</strong>- Forms of praecipe required to be filed in the Registry or the Marshal&rsquo;s office may be obtained on application in the Registry. They may be varied or altered by a Judge at his discretion.</p>

<p>44. <strong>Signature to praecipe.</strong>- Every praecipe shall be signed either by the party or by his attorney.</p>

<p>45. <strong>Improperly filled up praecipe.</strong>- If a praecipe be not properly filled up, the Registrar or the Marshal, as the case may be, may refuse to receive the same or to act thereon.</p>

<p>46. <strong>Caveats to be in force for six months.</strong>- A caveat, whether against the issue of a warrant, the release of property, or the payment of money, out of the Registry, shall not remain in force for more than six months from the day of the date thereof.</p>

<p>47. <strong>Withdrawal of Caveat.</strong>- A Caveat may be withdrawn by the party on whose behalf it has been entered or by his attorney; but the praecipe to lead the withdrawal thereof shall, save by permission of the Registrar, be signed by the person who signed the praecipe to lead the entry of the Caveat.</p>

<p>48. <strong>Application to overrule a Caveat.</strong>- Application may be made to the Court on motion or to a Judge in Chambers, by summons to overrule any Caveat.</p>

<p>49. <strong>Fees.</strong>- The fees of Court and the fees to be allowed to the attorneys shall be those set out in the tables of fees sanctioned for proceedings under the Original Civil Jurisdiction of the High Court. [ The fees to be paid to the Marshal shall be these set forth in the schedule hereto.</p>

<p>Provided, however, that where the Marshal is a whole time employee of the High Court or Government, all payments to either in terms of this schedule or otherwise, save and except his out-of-pocket expenses and such other sum as may specifically be sanctioned by the Court for appropriation by the Marshal by way of his individual fee for any special service rendered, shall be credited to the Account of the Government of West Bengal].</p>

<p>50. <strong>Forms of Admiralty Division to be followed.</strong>- The forms used in the Admiralty Division of the Supreme Court in England under the Rules of the Supreme Court, in 1883, shall be followed as nearly as the circumstances of each case will allow.</p>

<p>51. <strong>Where other provision not made rules and practice of ordinary original civil jurisdiction to apply.-</strong> Where no other provision is made by these rules proceedings in suits brought in the Court in the exercise of its jurisdiction under the Colonial Courts of Admiralty Act, 1890, shall be regulated by the rules and practice of the Court in suits brought in it in the exercise of its Ordinary Original Civil Jurisdiction.</p>

<p><strong>Special Summary Procedure</strong></p>

<p>52. <strong>Summary procedure by consent.-</strong> The parties to any suit may have the same dealt with, heard and determined in accordance with the following special rules upon filing in the Registry a consent signed by the parties or their attorneys duly authorised in that behalf in the form given below.</p>

<p>53. <strong>Application to fix hearing and give directions.</strong> &ndash; After such consent has been filed application may be made by any party to the Judge in Chambers to appoint a day for the hearing, and to give directions.</p>

<p>54. <strong>No pleadings.</strong>- There shall be no pleading beyond a statement of claim verified by affidavit, but if there be a counter-claim notice thereof shall be given in writing before such consent as aforesaid is signed.</p>

<p>55. <strong>List of documents, Inspection.</strong> &ndash; List of documents shall be exchanged and mutual inspection of documents given at or before a time appointed by the Judge on the hearing of the application aforesaid.</p>

<p>56. <strong>Hearing of application.-</strong> At the hearing of the application aforesaid, unless it shall sufficiently appear from the statement of claim or otherwise in writing the plaintiff shall specify the cause or causes of action in respect of which the suit is brought, and, if practicable, the amount actually claimed, and the defendant shall specify the grounds of defence on which he relies and in salvage claims, the plaintiff and defendant respectively shall at the same time, or within such time as the Judge shall direct, state the values of their property and, if required, by affidavit. In the case of a counter-claim the cause or causes of action and the claim therein and grounds of defence thereto shall be similarly stated.</p>

<p>57.&nbsp; <strong>Evidence.-</strong> The Judge shall be at liberty to receive, call for, and act upon, such evidence, documentary or otherwise, whether legally admissible or not, as he may think fit.</p>

<p>58. <strong>Costs.-</strong> If in any suit the sum awarded, or for which judgment is given, exceeds the sum, if any tendered, the Judge may nevertheless exercise his discretion as to how and by whom the costs shall be borne.</p>

<p>59. <strong>Appeal.-</strong> There shall be no appeal from any order or judgment of the Judge except on a question of law, and then only by his leave.</p>

<p>60. <strong>In other respects ordinary rules apply.-</strong> In other respects the ordinary rules and practice shall apply so far as may be necessary. Notwithstanding anything in these special rules, the Judge may, if he thinks fit, make such orders as he might make under the ordinary rules and practice.</p>

<p>61. <strong>Supersession of former rules.</strong>- The foregoing rules shall apply to suits brought in the Court in the exercise of its Admiralty Jurisdiction in supersession of all former rules.</p>

<p>These Rules shall come into operation on the 1st day of June 1912.</p>

<p>By order of the Full Court.</p>

<p>J.H. HECHLE</p>

<p>Registrar, High Court, Original Side.</p>',
		       'publication_status' => 1,
		       'created_at' => new DateTime(),
		       'updated_at' => new DateTime()
		     ),
		     array(
		       'page_title' => 'Shipping Laws of Bangladesh',
		       'short_description' => NULL,
		       'page_content' => '<p id="myTitle"><strong>ACTS, ORDERS &amp; ORDINANCES:</strong></p>
<div class="row">
<div class="col-sm-6">
<p>Admiralty Court Act 1840 (Application in Bangladesh is Repealed)</p>

<p>Admiralty Court Act 1861&nbsp;(Application in Bangladesh is Repealed)</p>

<p>Courts of Admiralty Act 1891 (Repealed)</p>

<p>Admiralty Court Act, 2000</p>

<p>Aircraft (Removal of Danger to Safety) Ordinance</p>

<p>Asian Re-insurance Corporation Act</p>

<p>Bangladesh Flag Vessels (Protection) Ordinance</p>

<p>Bangladesh Labour Act</p>

<p>Bangladesh Labour Welfare Foundation Act</p>

<p>Bangladesh Land Port Authority Act</p>

<p>Bangladesh Merchant Shipping Ordinance</p>

<p>Bangladesh Preservation of Environment Act</p>

<p>Bangladesh Shipping Corporation Ain 2017</p>

<p>Bangladesh Water Act</p>

<p>Bill of Lading Act</p>

<p>BSMR Maritime University, Bangladesh Act</p>

<p>Carriage by Air Act</p>

<p>Carriage by Air (International Convention) Act</p>

<p>Carriage by Air (Supplementary Convention) Act</p>

<p>Carriage of Goods by Sea Act</p>

<p>Carriers Act</p>

<p>Chittagong Port Authority Ordinance</p>

<p>Civil Aviation Authority Ordinance</p>

<p>Civil Aviation Ordinance</p>

<p>Coast Guard Act&nbsp;</p>

<p>Code of Civil Procedure</p>

<p>Commercial Documents Evidence Act</p>

<p>Conservator of Ports, Lands and Buildings (Recovery of Possession) Act</p>

<p>Court-fees Act</p>

<p>Customs Act</p>

<p>Dangerous Cargoes Act</p>

<p>Environment Courts Act</p>

<p>Evidence Act</p>

<p>Fatal Accidents Act</p>

<p>Ferries Act</p>

<p>General Clauses Act</p>

<p>Information and Communication Technology Act</p>

<p>Inland Ship Operation Minimum Safe Crew Number Order</p>

<p>Inland Shipping Ordinance</p>

<p>Inland Water Transport Labour (Appointment Control) Act</p>

<p>Insurance Act</p>

<p>Lighthouse Act</p>

<p>Limitation Act</p>

<p>Marine Fisheries Ordinance</p>

<p>Mongla Port Authority Ordinance</p>

<p>Naval Armament Act</p>

<p>Navy (Extension of Service) Act</p>

<p>Navy Ordinance</p>

<p>Notaries Ordinance</p>

<p>Oaths Act</p>

<p>Obstructions in Fairways Act</p>

<p>Payra Port Authority Act</p>

<p>Pilotage Ordinance</p>

<p>Port Authorities Lands and Buildings (Recovery of Possession) Ordinance</p>

<p>Ports Act</p>

<p>Power of Attorney Act</p>

<p>Prevention of Interference with Aids to Navigation Ordinance</p>

<p>Protection of Ports (Special Measures) Act</p>

<p>Sale of Goods Act</p>

<p>Stage-Carriages Act</p>

<p>Territorial Waters and Maritime Zones Act</p>

<p>Water Resources Planning Act</p>

<p><strong>&nbsp;</strong></p>
</div>
<div class="col-sm-6">
<p><strong>RULES:</strong></p>

<p>Admiralty Court Rules</p>

<p>Bangladesh Fishing Vessel (Engineer Officer) Certification Rules</p>

<p>Bangladesh Flag Vessels (Protection) Rules</p>

<p>Bangladesh Merchant Shipping (Convention Implementation) Rules</p>

<p>Bangladesh Merchant Shipping (Certification of Deck Officers) Rules</p>

<p>Bangladesh Inland Water Transport (Time and Fare Table Approval) Rules</p>

<p>Bangladesh Inland Water Transport (Allocation of Routes and grant of Route Permits) Rules</p>

<p>Bill of Export Rules</p>

<p>Chalna Anchorage Lands and Buildings (Recovery of Possession) Rules</p>

<p>Chittagong Port Lands and Buildings (Recovery and Possession) Rules</p>

<p>Chittagong Port Supplementary Petroleum and Carbide of Calcium Rules</p>

<p>Civil Aviation Rules</p>

<p>Customs Agents (Licencing) Rules</p>

<p>Environment Preservation Rules</p>

<p>Freight Forwarders (Licencing and Operation) Rules</p>

<p>Frustrated Cargo Export Rules</p>

<p>Inland Mechanically Propelled Vessels Rules</p>

<p>Inland Steel Made Ships Rules</p>

<p>Inland Ship (Passengers) Rules</p>

<p>Inland Ship (Free-Board) Rules</p>

<p>Inland Ship (Duration) Rules</p>

<p>Inland Ship (Life Saving) Rules</p>

<p>Inland Ship (Fire Safety) Rules</p>

<p>Inland Ship (Examination, Curriculum, Inland Master, Driver etc.) Rules</p>

<p>Inland Water Transport &nbsp;Authority Rules</p>

<p>Inland Ship (Transportation) Rules</p>

<p>Inland Ship (Dangerous Goods) Transport Rules</p>

<p>Inland Ship (Tonnage Measurement) Rules</p>

<p>Lighthouse Advisory Committee Rules</p>

<p>Marine-Commercial Officer &amp; Sailor Training, Certification, Recruitment, Working Hours and Watch Keeping Rules</p>

<p>Marine Fisheries Rules</p>

<p>Merchant Ship Seaman Recruitment Rules</p>

<p>Navy Rules</p>

<p>Notaries Rules</p>

<p>Pilotage Fees Rules</p>

<p>Port of Chalna (Entry into Protected Area) Rules</p>

<p>Port Rules</p>

<p>Pre-Shipment Inspection Rules</p>

<p>Removal of Wreck and Obstructions in Inland Navigable Waterways Rules</p>

<p>River Conservancy and Pilotage Service Fees Rules</p>

<p>Rules for the Protection of Inland Steam Vessels From Danger by Explosion or Fire</p>

<p>Rules for the Protection of Inland Steam and Motor Vessels from Danger by Collision</p>

<p>Rules to Regulate the Towing and Speed of Inland Steam Vessels</p>

<p>Rules to Regulate the Carriage of Passengers Inland Steam Vessels</p>

<p>Seaman Recruiting Agents (Licencing) Rules</p>

<p>Ship Breaking and Recycling Rules&nbsp;</p>

<p>Ship Surveyors (Certificate) Rules</p>

<p>Standing Order for Salvage of Sunken or Capsized Vessels</p>

<p>Territorial Waters and Maritime Zones Rules</p>

<p>Detained Vehicles (Interim Release) Rules&nbsp;</p>

<p>Detained Vehicles and Goods (Interim Release) Rules&nbsp;</p>

<p>&nbsp;</p>

<p><strong>REGULATIONS:</strong></p>

<p>Bangladesh Merchant Shipping (Radio) Regulations</p>

<p>Regulations for Working of Chittagong Port (Cargo and Container)</p>

<p>Traffic Manual for Chittagong Port</p>
</div>
</div>',
		       'publication_status' => 1,
		       'created_at' => new DateTime(),
		       'updated_at' => new DateTime()
		     ),
		     array(
		       'page_title' => 'Rulings on Shipping Laws',
		       'short_description' => NULL,
		       'page_content' => '<p id="myTitle">RULINGS ON SHIPPING LAWS:</p>

<p><strong>&nbsp;</strong></p>

<p><strong>ADMINISTRATION OF JUSTICE ACT, 1956</strong></p>

<p><strong>Section 3(4)</strong>- England&rsquo;s Admiralty Court was conferred jurisdiction by section 3(4) of Administration of Justice Act of 1956 to arrest any vessel or property of the defendant though it had no concern with the cause of action. But a similar power to arrest any ship which is not the subject matter of the suit cannot be exercised by the Admiralty Court of Bangladesh by virtue of the power given to the England Admiralty Court by section 3(4).</p>

<p>Jurisdiction conferred by section 6 of the Admiralty Court Act of 1861 which is exercised by the Admiralty Court of Bangladesh is so exercised under the provisions of Colonial Courts of Admiralty Act, 1890 and the Colonial Courts of Admiralty Act (India), 1891.</p>

<p>Superior Courts of the sub-continent, including Bangladesh Supreme Court never exercised admiralty jurisdiction on the basis of practices followed by the England Admiralty Court which the latter court continued to exercise until the year 1840 when by the Administration of Justice Act of 1840 the law about exercise of admiralty jurisdiction was defined by that Act of 1840. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p>Practices as followed by England&rsquo;s Admiralty Courts were for long time discontinued and it was after that on the basis of the statute laws that these courts began exercising admiralty jurisdiction.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p>Bangladesh Admiralty Court exercises jurisdiction given to it under section 6 of the Act of 1861 by virtue of the provisions of section 2(2) of Colonial Court of Admiralty Act, 1890 and as such Administration of Justice Act, 1956 is not applicable in Bangladesh.</p>

<p><strong><em>Kings Shipping Trading Co. vs Messrs LS Line &amp; others</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>ADMIRALTY COURT ACT, 1861</strong></p>

<p>Rejection of a plaint filed in the Admiralty Jurisdiction under Order VII, rule 11(a) of the Code of Civil Procedure is not permissible under the Rules.</p>

<p><strong><em>M/S. Shaleh Steel Industries Ltd. vs TSS PACIFIC ABETO </em></strong></p>

<p>&nbsp;</p>

<p>Suit to recover compensation for non&ndash;delivery of goods carried by a ship is maintainable under the High Court Division&rsquo;s Admiralty Jurisdiction.</p>

<p><strong><em>Albert David vs M/S. Brosterm Shipping Company </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>S. 6.&nbsp;&nbsp;&nbsp;&nbsp; </strong>Section 6 of the Admiralty Court Act gives the Court&rsquo;s Jurisdiction only when there is damage done to the goods on account of breach of contract of carriage or due to negligence, misconduct or breach of duty, independently of the contract which resulted in damage to the goods to be carried by the ship.</p>

<p><strong><em>Al-Sayer Navigation vs Delta Int. </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>S. 5. </strong>&lsquo;Incidental expenses as were necessity on the ship&rsquo;- When this condition is not fulfilled a suit u/s 5 will not lie.</p>

<p><strong>S. 6. </strong>A suit which is not for damage to the goods carried by the ship, nor it is for breach of contract, will not come within the ambit of section 6.&nbsp;</p>

<p><strong><em>Eastern Steamship Enterprise Private Ltd. vs Bangladesh Ag. Research Institute. </em></strong></p>

<p>&nbsp;</p>

<p>Bangladesh Supreme Court exercises its admiralty jurisdiction by virtue of Admiralty Court Act of 1861 read with Colonial Courts of Admiralty Act of 1890 (India) in like manner as done in England&rsquo;s Admiralty Courts by virtue of Admiralty Court Act, 1890 read with Admiralty Court Act of 1861.</p>

<p><strong><em>Kings Shipping Trading Co. vs Messrs LS Line </em></strong></p>

<p>&nbsp;</p>

<p>Jurisdiction of Admiralty Court of England was extended by section 3 of the Administration of Justice Act of 1956.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>&nbsp;Kings Shipping Trading Co. vs Messrs LS Line</em></strong></p>

<p>&nbsp;</p>

<p>The Court of Admiralty of High Court Division has derived its jurisdiction from these Acts- The suit is maintainable.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Mahajak Shipping Co. Ltd. vs M.V. Sagar </em></strong></p>

<p>&nbsp;</p>

<p>There is nothing on record to show that the plaintiff controverted allegations of the owner of the vessel and then the application for attachment/arrest being belated is liable to be rejected. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Captain Md. Mobarak Hossain vs MT Dolors and Others&nbsp; </em></strong></p>

<p>&nbsp;</p>

<p>There is no legal bar in the Customs Act to the supply of goods and services to the ship in distress and anchored at any port in Bangladesh. High Court Division was not justified to refuse a decree on the ground that the goods and services were not supplied with the approval of the customs officer on board the vessel.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Giasuddin (Md) vs MV Forum Power and others </em></strong></p>

<p>&nbsp;</p>

<p><strong>Sections 2 and 7- </strong>&ldquo;Ship&rdquo; shall include any description of vessel used in navigation not propelled by oars occurring in section 7 of the Act. The expression &ldquo;ship used in navigation&rdquo; shall mean vessels of all kinds in navigation external or internal.</p>

<p>The Court of Admiralty of this Court would have the same jurisdiction as that of the Court of Admiralty in England and as a matter of fact that Court of Admiralty in England never admitted to have made any distinction between collisions within the body of the country and collision on the high seas.</p>

<p>A cause of action arising out of tort has never been excluded or taken away from the jurisdiction of the High Court either by Act of 1917 or by Ordinance of 1976. This Court has jurisdiction to entertain this suit alleging collision within the internal water. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Al Falha-Shipping Lines Ltd. vs Bangladesh, IWTC </em></strong></p>

<p>&nbsp;</p>

<p><strong>Sections 4-6, 7, 13, 17 and 35- </strong>Jurisdiction of the High Court of Admiralty in England over any claim for necessaries supplied to any ship elsewhere in the port to which the ship belongs and have jurisdiction over any claim by the owner or consignee or assignee of any bill of lading of any goods carried into any port in England or Wales in any ship for damage done to the goods by negligence or misconduct on the part of the owner, master or crew of the ship.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>&nbsp;Al Falha Shipping Lines Ltd. vs Bangladesh IWTC </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 6- </strong>Provisions of section 6 of Admiralty Court Act, 1861 is the relevant law for the present dispute. According to this section, the High Court Division of the Supreme Court can only exercise jurisdiction over any claim for damage done to the goods or any part thereof by the negligence or misconduct of or for any breach of duty or breach of contract on the part of owner, master or crow of the ship.</p>

<p>Claim for damages was not a claim for damage to the goods, rather the claim rests on the contribution to be made by the petitioner towards the general average loss resulting from the damage suffered by the ship itself. If does not fall within the mischief of provisions of section 6 of the Act of 1861.</p>

<p>Admiralty jurisdiction cannot be exercised in deciding the suit wherein no allegation has been made as to damage to goods. Section 6 of the Admiralty Courts Act, 1861 cannot be invoked.</p>

<p>Mere allegation of breach of contract or misconduct on the part of the shipowner, the master and the crew of the vessel, is not enough to invoke the provision of section 6 of the Admiralty Courts Act, 1861.</p>

<p>Administration of Justice Act, 1956 is not applicable to Bangladesh. The decision in the case reported in 34 DLR (AD) 110 discussed.</p>

<p>A careful reading of the decision in the case of Al-Sayer Navigation Co. does not also support the contention of the learned Counsel of the plaintiff as in the said decision it has not been held that the Administration of Justice Act, 1956 is applicable in Bangladesh. The decision so far as it relates to the Admiralty jurisdiction of the courts in England, has traced the enlargement of the jurisdiction of the Admiralty Court in England from time to time by enactments of the British Parliament.</p>

<p><strong><em>TCB vs M.V. Corina</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 6- </strong>In an action in rem under Admiralty Jurisdiction the proceeding is commenced by the arrest of the res, the ship, such arrest is not an interlocutory order.</p>

<p><strong>Section 6- &ldquo;</strong>Damages done to the goods&rdquo; as is appearing in section 6 has to be construed liberally so as to include constructive damage, thus it shall apply to non-delivery or short delivery of goods.&nbsp;</p>

<p><strong><em>Doon Valley Rice Limited vs MV Yue Yang and others</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 6-</strong> The language of this section, which confers jurisdiction upon the Court of Admiralty is very specific and definite as to persons who can raise a claim in the Court of Admiralty. Among the persons entitled to raise a claim in the said Court, an insured is not included.</p>

<p><strong><em>Eastern Insurance Co. Ltd. vs DB Deniz Nakliyati TAB </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 6- </strong>There is no cause of action shown as regards any damage done to goods and there is no prayer for decree of compensation for any damaged goods. Decree for damages must be prayed in an admiralty suit and the prayer relating to declaration of General Average may be made as additional or consequential relief for damage to goods by carrier during the voyage. The declaration as prayed in the present case cannot independently come within the purview of any of the provisions of the Admiralty Court Act. The plaintiff&rsquo;s suit is just like a declaratory suit of civil nature which is not contemplated under provisions of the Admiralty Court Act.</p>

<p><strong><em>Sadharan Bima Corporation vs MV Birba </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 6- </strong>In an admiralty suit where the plaintiff fails to produce the original bill of lading, the owner of the ship or its master or agent cannot give delivery order of the cargo and if it is so given, the carrier shall be liable for breach of contract. In order to invoke the court&rsquo;s admiralty jurisdiction two conditions are to be satisfied, one is the damage done to the goods on board the ship by negligence or misconduct of the owner, master or crews of the ship and the other breach of the contract in relation to the cargo.</p>

<p><strong><em>Madina Vegetable and Oil Refinery Industries (Private) Limited Vs M. T. Dolores </em></strong></p>

<p><strong><em>&nbsp;</em></strong></p>

<p><strong>Section 6- </strong>Although rejection of the plaint was prayed for, the plaint is returned to the filing advocate in exercise of inherent power as the Admiralty Court lacks jurisdiction and the plaint cannot be rejected by such a court, the provision for rejection of plaint having not been made applicable under the rule of the Admiralty Court.&nbsp;&nbsp;&nbsp; <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>&nbsp;</em></strong></p>

<p><strong><em>Madina Vegetable and Oil Refinery Industries (Private) Limited vs M. T. Dolores</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 6- </strong>Only the owner or consignee or assignee of the Bill of Lading of any goods may claim damages against the owner, master or crew of the ship. The plaintiff insurer having satisfied neither of these descriptions they have no locus standi to invoke the jurisdiction of the Admiralty Court.</p>

<p><strong><em>Sadharan Bima Corporation vs Bangladesh Shipping Corporation </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 6- </strong>Since the plaintiff is neither the owner nor consignee nor assignee of any Bill of Lading of any goods and since no damage was done to any goods of the plaintiff on board by the defendant, the plaintiff-insurer has no locus standi to invoke the jurisdiction of the Admiralty Court Act. The plaint be returned to the plaintiff with liberty to file it in appropriate court, if not otherwise barred.&nbsp;&nbsp;</p>

<p><strong><em>Sadharan Bima Corporation vs Bangladesh Shipping Corporation </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 6- </strong>For fundamental breach of the contract the defendants are liable to deliver the consignment in the order and conditions in which the goods were stuffed in the containers and were received by them on board the vessel. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Resource International vs MV Sargodha and others </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 6, 7 &amp; 11- </strong>Causes arising out of a contract of marine insurance would come under the provisions of Admiralty Courts Act of 1861 for this court to have jurisdiction. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Bengal Liner Ltd., Dhaka vs Sadharan Bima Corporation</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 11- </strong>Jurisdiction of High Court in matters concerning marine insurance or maritime assurance arising out of such contracts and claims arising out of a marine mortgage is covered by section 11 of the Admiralty Courts Act of 1861.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>&nbsp;Bengal Liner Ltd., Dhaka vs Sadharan Bima Corporation </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 34- </strong>In the present situation of the case it would be quite just and proper if the proceeding of the principal cause i.e. Admiralty Suit No. 33 of 1995, is suspended until security is furnished by the ship of the plaintiff to answer the judgment in the cross-cause.</p>

<p><strong><em>GD Alesio, Livorno, Italy, Owner of MV Mauro D&rsquo;Alesio vs MV Hawai Splendour &amp; others </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 52- </strong>There is nothing in the Shipping Ordinance barring the jurisdiction of Admiralty Court to entertain any claim for damages done by any ship. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Bangladesh Inland Water Transport Corporation vs Al-Falah Shipping Lines Ltd. And others </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 52- </strong>The Admiralty Court has jurisdiction to entertain and decide suit for compensation arising out of the cause taking place both in inland water and on the high seas. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>BIWTC vs Al-Falah Shipping Lines Ltd. And others</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 6- </strong>Return of Plaint- As the cargo had never been brought to any port in Bangladesh by the defendant No. 1 vessel and unless the goods in question are carried into any port of Bangladesh, section 6 of the Admiralty Court Act, 1861 cannot be made applicable and as such, the plaint is liable to be returned.</p>

<p><strong><em>National Steel Industries Limited vs MV Ritz and others </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 6- </strong>The applicant-petitioner as an insurer of the cargo in question has paid certain amount of money in settlement of the plaintiff&rsquo;s claim for the loss of cargo in question but the plaintiff is prosecuting for a bigger amount of claim than he received from the insurer under the letter of subrogation meaning thereby the plaintiff still has a subsisting interest to proceed with the suit and as such, the applicant-petitioner is added as co-plaintiff in the present admiralty suit.</p>

<p><strong><em>Doon Valley Rice Ltd. vs MV Yue Yang and others </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 6-</strong> Proceeding before the Admiralty Court is a civil proceeding as it involves the assertion or enforcement of a civil right when Rules 3 and 51 of the Admiralty Rules, if read with sections 117 and 141 of the Code of Civil Procedure, will show that the provisions of the Code of Civil Procedure are applicable to the proceedings before the Admiralty Court unless it is excluded by any rule. There appears to be no rule making the provision of Order 1 rule 10(2) of the Code of Civil Procedure inapplicable to the Original Civil Jurisdiction of the High Court Division, namely, its admiralty jurisdiction.</p>

<p><strong><em>Doon Valley Rice Ltd. vs MV Yue Yang and others </em></strong></p>

<p>&nbsp;</p>

<p><strong>Section 6- </strong>A suit for declaration is not maintainable under section 6 of the Admiralty Court Act, 1861. Similarly, a suit for declaration that declaration of general average arising out of jettison is not amenable to the jurisdiction of an Admiralty Court under section 6 of the Act. The Admiralty Judge acting on the strength of section 157 read with sections 117 and 114 CPC rightly returned the plaint with the observation that the plaintiff is at liberty to file the suit in an appropriate forum.</p>

<p><strong><em>Sadharan Bima Corporation vs MV Birba and others</em></strong></p>

<p>&nbsp;</p>

<p><strong>Section 6-</strong> Section 6 of the Admiralty Court Act, 1861 provides that an Admiralty Suit can be filed by the owner or consignee or assignee of any bill of lading of any goods carried by ship for damage done to the goods or any part thereof by negligence or misconduct of the owner, master or crews.</p>

<p><strong><em>Shahnaz Traders vs MV Sletter and others</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 6-</strong> It is now well settled that damage suffered by the consignee on account of delay in delivery arising out of breach of contract of carriage comes within the purview of section 6 of the Admiralty Court Act 1861. Whether there has been any breach of contract or not, and if there is any breach, what would be the quantum of damage shall be decided at the time of final hearing of the suit.</p>

<p><strong><em>Bangladesh Petroleum Corporation vs MT Saraband Ex-Sunrise-1 and others</em></strong></p>

<p>&nbsp;</p>

<p><strong>Section 6-</strong> In the absence of any express provision in the bill of lading in the present case with regard to the shipowner&rsquo;s lien on the cargo of the plaintiff or that the plaintiff as a consignee was under obligation to take delivery of the cargo at his own expense in case the ship is withdrawn from the charter for breach of the charter-party by the charterers the shipsowners are not entitled to refuse delivery of the balance cargo of the plaintiff in the name of exercising lien.</p>

<p><strong><em>USS Enterprise vs MV Spiros and others </em></strong></p>

<p>&nbsp;</p>

<p><strong>Section 10- </strong>Since the plaintiff has not been discharged earlier by the owner or master of the vessel he is entitled to get his salary/wages and other allowances as per contract till he is signed off from the vessel and taking into consideration of the evidence of PW 1 and the documents exhibited it appears that the plaintiff has been able to prove his case and he is entitled to get his total claim.</p>

<p><strong><em>Volodymyr Portnov vs MV Terpsichore and others </em></strong></p>

<p>&nbsp;</p>

<p><strong>Section 34- </strong>Although no cross cause has been filed shortly after filling of the principal cause but written statement was promptly filed in the principal cause along with a counter claim for an amount for which cross cause, and the application under section 34 of the Admiralty Court Act for obtaining security from the owner of the other vessel collided with each other though filed belatedly it has not prejudiced the plaintiff of the principal cause for which the plaintiff of the principal cause is required to furnish a bank guarantee of the equal amount which the defendant of the principal has furnished.</p>

<p><strong><em>&nbsp;GD D&rsquo;Alesio, Livorno, Italy, Owner of MV Mauro D&rsquo;Alesio vs MV Hawai Splendour and others </em></strong></p>

<p><strong>Section 7- </strong>It is contended on behalf of the decree-holder-petitioner that the admiralty suit has been decreed long ago but yet the judgment debtors have paid but a negligible amount of the decretal amount and also they have come with the applications for permission to sell the attached and mortgaged properties of the judgment debtor to realize decretal amount though the sale of these properties would not satisfy the decree in its entirety. The jurisdiction of the High Court Division is not derived from the Letters Patent of 1862 or that of 1865, but from the Colonial Courts of Admiralty Act (India) of 1891 and the Court of Admiralty Act 1861 of England.</p>

<p><strong><em>Sonali Bank vs Bengal Liner Ltd. and others </em></strong></p>

<p>&nbsp;</p>

<p><strong>Section 6- </strong>In an Admiralty Suit the plaintiff filed an application for extension of Bank guarantee which expired on 17-12-2001 by efflux of time. It appears that it is the obligation of the defendant to take necessary steps to renew the Bank guarantee because the arrested vessel was released only on furnishing the Bank guarantee and since the Bank guarantee itself is the security instead of vessel such security must be continued and kept in force till disposal of the suit.</p>

<p><strong><em>Java Vegetable Oil Ltd. vs MT Komandarm Fedko&nbsp; and others </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 10- </strong>Plaintiff as Master of the vessel was not given his monthly salary and other allowances from the date of his joining the vessel and he could not sign off nor was relieved from his service even after the expiry of his contractual period of employment and hence he is entitled to salaries and other allowances till the date of his signing off or release from the vessel for an amount of US$ 29761.84 equivalent to Bangladeshi Taka 14,49,401.61. By an amendment of plaint his claim was enhanced.&nbsp;</p>

<p>Plaintiff proved his case ex parte and he is entitled to recover an amount of US$ 38,992.05 (or its equivalent amount in taka as on the date of payment) with costs against the defendant Nos. 1 and 2 with interest at the rate of 10% per annum from the date of decree till its realization. It is an action in rem against the vessel and in personam against the other principal defendants.</p>

<p><strong><em>Captain Khawja Bakhtyiar Saleem vs MV Delta Star and others </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 5- </strong>On a clear reading of section 5 of the Act of 1861 the High Court Division is of the view that the judgment passed in decreeing the Admiralty Suit against the defendants ex parte cannot be said to have been passed without jurisdiction. In that regard, the High Court Division finds itself to be in agreement with Mr. Siddique&rsquo;s submission that the Admiralty Court having assumed jurisdiction under section 5 of the Act of 1861 to consider the claim of the plaintiff for supply of bunkers to the vessel &lsquo;MV Peleas K&rsquo;, section 230 of the Contract Act, 1872 cannot be said to have an application in these facts and cannot, therefore, be interpreted to have a co-extensive application with section 5 of the Act of 1861 for assumption of jurisdiction for passing a decree for claims arising from the supply of fuel to the vessel.</p>

<p><strong><em>Fairdeal Marine Services vs &lsquo;MV Peleas K&rsquo;</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 5- </strong>The decree- holder- petitioner had a right to seek a comprehensive and complete relief the first time around, but having not done so, as is evident in the facts and circumstances of this case, shall not, therefore, have any avenue open to it for placing claims periodically at subsequent dates. Having thus failed to so fully exercise its right by execution of the entire Decree at one go the decree-holder-petitioner, and as is evident in the execution petition of 10-03-2005, having asked this Court to enforce the decree for the sum only of Taka 19,70,000, a sum lesser than the gross claimed amount of Taka 31,03,562.50 inclusive of interest, must now be taken to have accordingly waived the right to claim the balance amount of Taka 11,33,562.50. Requiring this Court to now allow satisfaction of the claim to the balance interest amount in the manner as sought in the application dated 25-09-2005 is tantamount to effectively asking this Court to innovate on the execution application and case which this Court is now reluctant to undertake in the facts and circumstances. <strong>&nbsp;</strong></p>

<p><strong><em>Fairdeal Marine Services vs &lsquo;MV Peleas K&rsquo;</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 6- </strong>The Exhibit- B has not been considered by the trail Court and failed to consider that the defendants delivered 15,891 tonnes of food grains at Chittagong and 9,271 tonnes of food grains at Chalna thus, the total quantity being of 25,132 tonnes of food grains (wheat) were delivered to the plaintiff. The plaintiff should not depend upon gross measurement of food grains contained in a bulk in a vessel of a surveyor. They should calculate the actual quantity of food grains. Thus the judgment and decree passed by the trial Court suffers from illegality and not sustainable in law.</p>

<p><strong><em>Commerce Tanker Corporation vs Bangladesh </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 6- </strong>It appears that the vessel &lsquo;MV Chosun Hope&rsquo; has not reached late in the discharge port and used its maximum speed and dispatch to reach discharge port within the stipulated period as made in the addendum of the charter party. The plaintiff did not suffer any loss as yet on the count of imposition of development surcharge on the consignment of Soda Ash Light as imported through the defendant&rsquo;s vessel which reached Chittagong Port on 26-06-1997. In view of the discussion and reasoning as above, this Court finds that the plaintiff succeeds in proving the cause in part for which the plaintiff is entitled to a decree in part in the suit and accordingly this Court hold that the plaintiff is entitled to recover compensation from the defendant No. 1 at an amount of Taka 1,06,250 along with simple interest @ 18% PA from the date of discharge of the cargo up-to the actual realization of the decreetal dues.</p>

<p><strong><em>Fazlur Rahman &amp; Co Private Ltd. vs &lsquo;MV Chosun Hopi&rsquo; </em></strong></p>

<p>&nbsp;</p>

<p><strong>Section 6- </strong>Since the plaintiff has taken delivery of the cargo after the free time, the plaintiff is responsible for his own negligence and the defendants is completely immune from any liability which may be occurred due to the hole in the container allegedly damaging the goods therein. Therefore, this Court finds that the plaintiff failed to prove the allegation that the defendants are liable for any damage caused to the household articles of the plaintiff which was carried by the container from the port of Baltimore to the Port of Chittagong by the defendant&rsquo;s vessel.</p>

<p><strong><em>Mizanur Rahman Khan vs American Liner Systems, USA&nbsp;&nbsp; </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>ADMIRALTY COURT ACT, 2000</strong></p>

<p><strong>Section 4(4)- </strong>Beneficial ownership -Action in personem- Action in rem- Having regard to the provisions of the Admiralty Courts Act and the Carriage of Goods by Sea Act and on consideration of the decisions cited, the court has no doubt that the vessels &lsquo;MV X-Press&rsquo; Manaslu and &lsquo;MV X-Press&rsquo; Resolve cannot be arrested for security of the plaintiff&rsquo;s claims, for, the claims in the suit cannot be enforced in an action in rem against the vessels owned by stranger to the dispute.</p>

<p><strong><em>HRC Shipping Ltd vs MV X-Press Manaslu, MV X-Press Resolve&nbsp; </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 24-</strong> It is contended on behalf of the decree-holder-petitioner that the admiralty suit has been decreed long ago but yet the judgment debtors have paid but a negligible amount of the decretal amount and also they have come with the applications for permission to sell the attached and mortgaged properties of the judgment debtor to realize decretal amount though the sale of these properties would not satisfy the decree in its entirety.</p>

<p>The jurisdiction of this Court is not derived from the Letters Patent of 1862 or that of 1865, but from the Colonial Courts of Admiralty Act (India) of 1891 and the Court of Admiralty Act 1861 of England.</p>

<p>The Admiralty Court Rules was framed in 1912 which was gazette in 12th June, 1912 and that rule is still in force in Bangladesh pursuant to the provisions of section 24 of the Admiralty Court Act, 2000. Section 24 of the present Act provides that until rules are framed under the new Act the Admiralty Rules which were in existence will be followed and admittedly no rule has yet been framed under the Admiralty Court Act, 2000. Therefore, the rules framed in 1912 under the provisions of the previous Act arc still in force and govern the procedure in the Admiralty Court.</p>

<p><strong><em>Sonali Bank vs Bengal Liner Ltd. </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p>Section 3(2)(Cha) of the said Act provides that Admiralty Suit shall be maintainable for recovery of compensation arising out of loss of or damage to goods carried in a ship. This Court finds that the cause of the plaintiff is squarely maintainable in this jurisdiction as such issue No. 1 is disposed of in favour of the plaintiff. This Court finds that as the ulage survey report confirms that the vessel had the quantity of 24,000 MT of CDSO and the same quantity of CDSO was discharged by the vessel in the lighter-age tankers which carried the same to the shore tanks owned by the plaintiff and therefore the plaintiffs suffered no loss or damage on this count. There being no short landing of the cargo from the vessel &lsquo;MT Trompeteros&rsquo;, the claim of the plaintiff as to incurring loss in respect of short landing has no substance to be considered by this Court. Moreover, since the adjudication made by the customs authority was not lawful, the plaintiffs have also not incurred any loss in respect of the customs Penalty which is not at all a liability of the plaintiff. Therefore, the question of business loss upon the alleged short landing does not come at all.</p>

<p><strong><em>S. Alam Vegetable Oil Ltd. vs &lsquo;MT Trompeteros&rsquo;&nbsp;&nbsp;&nbsp;&nbsp; </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 4(4)- </strong>Having, therefore, had regard to the referred provisions of section 4(4) of the Admiralty Court Act, 2000 and section 2 of the Carriage of Goods by Sea Act and having perused, in particular, this Court&rsquo;s previous order in Admiralty Suit No. 27 of 2005 that dealt with a similar dispute arising out of the same facts and circumstances, this Court is inclined to hold that the Order of arrest of 10-07-2007 of the vessels &lsquo;MV Lady Fatima&rsquo; and &lsquo;MV Da Li&rsquo; is not sustainable in law. It is at this juncture that this Court is additionally put on notice of the fact that of the two vessels subject to that Order of arrest, one vessel namely, &lsquo;MV Lady Fatima&rsquo; did not, in fact, call on and was not available at Chittagong Port at any material time. This Court has taken note of the fact, and as asserted in the supplementary affidavit filed on behalf of the defendant Nos. 1, 2 and 15, that in making the order of arrest on 10-07-2007 this Court possibly did not have the benefit of all relevant facts and circumstances of this case placed before it.</p>

<p>Accordingly, the application is allowed. The Order of arrest of the vessel &lsquo;MV Da Li&rsquo; is hereby vacated and it is ordered that the vessel &lsquo;MV Da Li&rsquo; now berthed at Chittagong Port, Chittagong be forthwith released from arrest. In the light of the fact that the other vessel &lsquo;MV Lady Fatima&rsquo; had never been effectively the subject of the Order of arrest dated 10-07-2007, that Order of arrest to the extent that it applied to the vessel &lsquo;MV Lady Fatima&rsquo; necessarily also stands vacated.</p>

<p><strong><em>HRC Shipping Ltd. vs &lsquo;MV Lady Fatima&rsquo; and &lsquo;MV Da Li&rsquo; </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 24- </strong>It is clear, however, that the plaintiff&rsquo;s claim has been proven in the regard only to that extent. The instant Admiralty Suit is thus liable to be decreed in favour of the plaintiff for a sum of Taka 32,28,703 equivalent to US $ 47,134.35 inclusive of cost ex parte against the defendant No. 1. Hence it is ordered that the Suit be decreed ex parte against the defendant No. 1. The plaintiff gets a decree for Taka&nbsp; 32,28,703 only inclusive of cost with interest @ 13% per annum on the decretal amount assessed from the date of the institution of the suit till the date of the realization of the decretal amount. The decretal amount shall be realized from the defendant No. 1.</p>

<p><strong><em>Evergreen Marine Corporation vs Fauzia Sharmin Tania </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 3(2)(Ja)- </strong>The plaintiff having stated in the plaint that he is engaged in business of shipping and substantiated it by filling document showing the dispute has arisen from the contract of carriage of goods by sea and therefore amenable under section 3(2)(Ja) of the Admiralty Court Ain, 2000.</p>

<p><strong><em>Evergreen Marine Corporations vs Habib and Brothers </em></strong></p>

<p>&nbsp;</p>

<p><strong>Section 4- </strong>Maritime lien accrues as only as security for payment for a debt of a person or company and only against the property of the creditor. Although these two Admiralty Suit have been heard separately one after another, yet as the factual and legal aspect involved in these suits are similar, the same are disposed of by this single judgment. High Court Division find that as all the Issues have been disposed off in favour of the plaintiff, these three suits is required to be decreed in favour of the plaintiff not to the strict sense of the prayer but in modified form.</p>

<p><strong><em>Kyung Hae Maritime Co. Ltd. vs M. V. BF Glory (Ex-Kunai) and others </em></strong></p>

<p>&nbsp;</p>

<p><strong>Dismissal of Admiralty Suit for non-prosecution: </strong>It appears that the plaintiff has compromised its suit with the defendants as per terms and conditions stated above and as such the plaintiff is not interested to continue with the suit as such the same is required to be dismissed for non-prosecution and vacate the order of arrest and also release of the vessel.</p>

<p><strong><em>Marodi Service S.A.S vs M. V. SWIFT CRO</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>S. 4(4)-</strong> Clause (b) of Section 4(4) provides that if person is liable in personem for the plaintiff&rsquo;s cause against a particular vessel and the said person is beneficial owner of 100% share of another vessel, then the plaintiff will be entitled to proceed against the latter vessel in rem in respect of his cause.</p>

<p><strong><em>Acquila Voyager Maritime GMBH vs M. V. Jin Acc </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>ADMIRALTY COURT RULES, 1912</strong></p>

<p><strong>Rule 23 &amp; 31- </strong>The rules being enabling provisions do not in any way circumscribe the discretionary jurisdiction of the Admiralty Court to either reduce or enhance the amount of Bank Guarantee for release of the arrested vessel. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>SM Monirul Islam vs MV You Bang </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Rules 3 and 51- </strong>Proceeding before the Admiralty Court is a civil proceeding as it involves the assertion or enforcement of a civil right when Rules 3 and 51 of the Admiralty Rules, if read with sections 117 and 141 of the Code of Civil Procedure, will show that the provisions of the Code of Civil Procedure are applicable to the proceedings before the Admiralty Court unless it is excluded by any rule. There appears to be no rule making the provision of Order I, rule 10(2) of the Code of Civil Procedure inapplicable to the Original Civil Jurisdiction of the High Court Division, namely, its admiralty jurisdiction.</p>

<p><strong>Rule 12- </strong>&nbsp;An insurer of the cargo has no independent right to invoke admiralty jurisdiction as a plaintiff in view of section 6 of the Admiralty Court Act, 1861 as it is neither an owner nor a consignee or assignee of the bill of lading of the cargo but it can be added as a co-plaintiff as per provision of Rule 12 of the Admiralty Rules and Order I, rule 10(2) of the Code of Civil Procedure in a pending Admiralty suit provided it acquires an interest in the vessel on the basis of letter of subrogation.</p>

<p><strong><em>Doon Valley Rice Ltd. vs MV Yue Yang and others </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Rule 35- </strong>The Admiralty Court Rules were framed in 1912 and since then rule 35 is in operation and till today the vires of this rule has not yet been challenged anywhere and on scrutiny of the provisions of the Act and the rule it appears that rule 35 has provided a complete procedure of realization of the decretal amount by selling the property of any kind of the judgment debtor unless otherwise directed by the court itself. Of course, there is discretion and the discretion vests in the court and not to the judgment debtor. In the instant case, it appears that the court did state that the immovable properties will be sold in a manner as provided by the Code for immovable property. Thus as per rule 35, immovable properties of the judgment debtor will be sold by the Marshal in like manner as a sale of movable property in execution of a dectree in an ordinary civil suit. Both movable and immovable property can be sold in a mode as provided for sale of movables by the Code and that is what is done here and is done in every Admiralty suit.</p>

<p><strong><em>Sonali Bank vs Bengal Liner Ltd. and others</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p>Bank guarantee furnished earlier had expired and refusal of its extension is not legal. In all accepted norms of good conscience and fairplay the respondents were required to keep their commitment valid till disposal of the Admiralty Suit but for the lapse on the part of the respondents would in no way disentitle the appellant to seek order from the Court to compel the respondent No. 1 to keep her commitment to the Court valid till adjudication of the said suit. Accordingly, the respondent No. 1 was directed to furnish fresh Bank Guarantee in the Admiralty Suit.</p>

<p><strong><em>Loyal Shipping (Pvt.) Ltd. and another vs MV Anangel Wisdom and others</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Rule 3- </strong>Upon a perusal of the documents as produced by and on behalf of the defendant Nos. 1, 2, 5 and 15 this Court finds no reason to question the scope and validity of the agency powers vested in the concerned Protecting and Declaring Agents to represent their foreign principals before this Court in all matters pertaining to and arising out of this Suit.</p>

<p><strong><em>HRC Shippong Ltd. vs &lsquo;MV Lady Fatima&rsquo; and &lsquo;MV Da Li&rsquo; </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Rule 35- </strong>The defendants Nos. 3 and 4 have neither adduced any oral evidence nor produced any documentary evidence to prove that the plaintiff has not supplied the necessaries i.e. bunkers and fresh water. From the deposition of the witness for the plaintiff and the documentary evidence produced in support thereof it is clear that the plaintiff&rsquo;s claim has been proved. The instant Admiralty Suit is thus liable to be decreed in favour of the plaintiff for a sum of US $ 55,465.61 equivalent Taka 28,18,762.30 with costs against the defendant Nos. 1, 3 and 4.</p>

<p><strong><em>Jove International Private Ltd. vs &lsquo;MV Accord&rsquo;</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>BANGLADESH MERCHANT SHIPPING ORDINANCE, 1983</strong></p>

<p><strong>Section 43- </strong>Jurisdiction of High Court in matters concerning marine insurance or maritime assurance arising out of such contracts and claims arising out of a marine mortgage is covered by section 11 of the Admiralty Courts Act of 1861 and by section 43 of the Bangladesh Merchant Shipping Ordinance.</p>

<p><strong><em>Bengal Liner Ltd., Dhaka vs Sadharan Bima Corporation </em></strong></p>

<p><strong><em>&nbsp;</em></strong></p>

<p><strong>Section 388- </strong>Law does not require the petitioner to procure any prior approval or permission of the Ministry of Fisheries and Livestock as a condition precedent to grant registration and licence to his trawler.</p>

<p><strong><em>&nbsp;Jane Alam (Md) vs Government of Bangladesh </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 460(1) -</strong> The owner of a vessel continues to own and has claim over the wreck of that vessel within six months. The wreck does not become the property of the Government like drift timber making the Government liable for the customs duty.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>&nbsp;Bashiruddin Ahmed vs Ministry of Finance</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Sections 477 and 479- </strong>Since the plaintiff has not been discharged earlier by the owner or master of the vessel he is entitled to get his salary/wages and other allowances as per contract till he is signed off from the vessel and taking into consideration of the evidence of PW 1 and the documents exhibited it appears that the plaintiff has been able to prove his case and he is entitled to get his total claim.</p>

<p><strong><em>Volodymyr Portnov vs MV Terpsichore and others</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>BANGLADESH TERRITORIAL WATERS AND MARITIME ZONE ACT, 1974</strong></p>

<p><strong>S. 3.&nbsp;&nbsp;&nbsp;&nbsp; </strong>Government issued notification defining territorial waters and economic zone of Bangladesh and it is not Court&rsquo;s function to decide what should be the limits of Bangladesh&rsquo;s territorial waters.</p>

<p>Bangladesh has in exercise of its sovereign right fixed the limits of the &ldquo;territorial waters.&rdquo; It confers the authority on the Government to fix the base line and declare the limits of the territorial waters. The notification set out above gives in details, in conformity with the powers conferred upon it by the Statute the limits of territorial waters of Bangladesh. The limits of the territorial waters has been fixed at twelve nautical miles measured seaward and has also defined the baseline giving the details set out in the notification mentioned earlier.</p>

<p>It is patent that all the three trawlers ware captured from the places which clearly fall within the territorial waters of Bangladesh as defined by the notification issued by the Government under the statutory powers conferred upon it by the Territorial Waters and Maritime Zones Act 1974.That being the position, both the Customs Authority and the High Court misdirected themselves in assuming the power to decide what should be the limits of territorial waters of Bangladesh.</p>

<p>The three trawlers were seized within the &ldquo;territorial waters&rdquo; of Bangladesh which is co-terminus with the &ldquo;Customs waters&rdquo; and hence their seizure was with jurisdiction.</p>

<p>In the Customs Act though there is no specific mention of the Government, the language is plain enough to include the power of the legislature and Government to determine the appropriate baseline. Measurement of twelve nautical miles from the appropriate base line on the coast of Bangladesh as provided in the Customs Act, therefore, cannot be the function of the Court.</p>

<p>There is no conflict between the &ldquo;territorial waters&rdquo; as defined by the notification under the Territorial Waters and Maritime Zones Act 1974 and the &ldquo;Customs Waters&rdquo; as defined under the Customs Act, 1969</p>

<p>They (the trawlers) were captured not within the &ldquo;economic zone&rdquo; but within the &ldquo;territorial waters&rdquo; of Bangladesh which is co-terminus with the &ldquo;Customs Waters&rdquo; and hence the Customs Authorities has full jurisdiction over the three offending Thai trawlers and those came within the mischief of the penal sections of the Customs Act. The actions taken by the Customs Authorities were done with jurisdiction and in accordance with law and no interference is called for.&nbsp;&nbsp;</p>

<p><strong><em>Bangladesh vs Somboon Asavahan</em></strong></p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong>BILL OF LADING ACT, 1856</strong></p>

<p>Bill of lading- Burden of proof about misstatement in it (e.g., where the complaint is that the goods has not been shipped) is on the buyer.</p>

<p>It is quite correct that although statement in the bill of lading is not a conclusive proof in law if buyer wanted to challenge the fact of shipment recorded in the bill of lading it was their duty to lead evidence in proof of their allegation that the goods had not been shipped.</p>

<p>It was incumbent on the buyer to prove that the goods had not been shipped. Where this onus has not been discharged it is not possible to hold that the goods were not shipped or the bill of lading was a forged document.</p>

<p>Master of the ship is liable in case of transshipment&mdash;not the person further endorsing the bill of lading in favour of a third party.</p>

<p>Even in cases where the hindrance of the ship&rsquo;s voyage is not caused by an excepted peril the ship owner is only liable for delay or failure to deliver and to compensate for terms more onerous to the shipper in transshipment. But this only is the responsibility of the Master of the ship and not of the person who has further endorsed the bill of lading in favour of a third party.</p>

<p><strong><em>Haji Moosa Haji Omar vs Ahmed Abdul Ghani </em></strong></p>

<p>&nbsp;</p>

<p>The expression &lsquo;apparent good order and condition&rsquo; means in a bill of lading that apparently and so far as met the eye and, externally, the goods were placed in good order on board the ship.</p>

<p><strong><em>M/S, Abdur Rahman Abdul Gani vs M/S, United Oriental Steam-Ship Co., Karachi and others</em></strong></p>

<p>&nbsp;</p>

<p>Bill of lading not being in itself a contract between shippers and shipowner, though evidence of its terms evidence is admissible of the oral contract of carriage arrived at between the shipper and shipowner&rsquo;s agent before the bill of lading had been signed.</p>

<p><strong><em>Muhammdi Steam-Ship Co. Ltd. and others vs M/S, Dada Limited Chittagong </em></strong></p>

<p>&nbsp;</p>

<p>The bill of lading contained the following clause: &ldquo;All cargo carried on deck are conveyed solely at the risk of the shipper&rdquo; and the particular consignment in the present case was carried on deck.</p>

<p>The consignee did not receive a part of the consignment for which he brought a suit claiming damage for non-delivery of the goods shipped per defendants&rsquo; steamship. The defendant company, relied on the foregoing clause in the bill of lading as relieving them (including the negligence of their agents and servants) of all liability for the loss of the goods and further relied on clause (c) of Article 1 of the Schedule to the Carriage of Goods by Sea Act under which cargo carried on deck are not governed by the provisions (vide para 8 of Article III) of the Carriage of Goods by Sea Act and contended that a common carrier can contract out of all liability by special terms of contract such as the one set forth above.</p>

<p>Held: General condition in the bill of lading as to the exemption for negligence does not help the ship owner.</p>

<p>On the foregoing terms it cannot be said that the defendants have completely absolved themselves from taking any care of the goods of which they took delivery for carrying them to their destination. It may be that they were carried on deck but that does not mean that they will not take any care of these goods. They are to take such care as one can take of goods carried on deck and if they are carried under a stipulation even then they will take such reasonable care as a man of ordinary prudence would do of the goods that are on the deck.</p>

<p>The duty of a common law carrier, generally speaking, is to take utmost care of the goods entrusted to him and he can only limit the liability of taking extraordinary care by certain special terms and contract.</p>

<p>When goods are delivered to a carrier, they are usually no longer under the eye of the owner. If they should be lost or injured by the grossest negligence of the carrier or his servants or stolen by them or by thieves in collusion with them, the owner would be unable to prove either or these causes of loss. To give due security to property, the law has added to the responsibility of a carrier, which immediately arises out of his contract to carry for a reward that of taking all reasonable care of it.</p>

<p>If the parties are to contract out completely as to their liability, even according to English Common Law they must do so in so many plain and unambiguous words. In other words, It is poen to the parties to even enter into terms of contract which will change the character of the common carrier altogether or destroy the character of a common carrier as a carrier.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p>Onus of proof is on the carrier where the goods are lost, even though there was the special condition of carrying the goods at owner&rsquo;s risk.</p>

<p><strong><em>Trans-Oceanic Steam-Ship Co. Ltd. &nbsp;and others vs Islamic Republic of Pakistan </em></strong></p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p>Bills of lading though not forming the contract of carriage of goods by sea themselves are first class evidence of contract between the parties.</p>

<p>Shipowner&rsquo;s liability to pay damage for goods shipped where the bill of lading contained the clause that the good were shipped &ldquo;in apparent good order and condition&rdquo;.</p>

<p>A clause was added in the bill of lading which was to the effect: &ldquo;Attention is drawn to the packing of these goods which in the option of the carrier is insufficient&rdquo;. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p>It was thereupon contended that the ship owner is not liable for loss and damage to the foods shipped.</p>

<p>Held : The statement as to &ldquo;apparent good order and condition&rdquo; estop the shipowner from proving that the goods were not in apparent good order and condition when shipped and therefore, from alleging that there were at shipment external defects in them which were apparent to reasonable inspection.</p>

<p>The shipowner is not allowed to reduce his liability by proving or suggesting contrary to his statement in the bill that the goods in respect of matters externally reasonably visible were not in good condition when shipped.</p>

<p><strong><em>Abdur Rahman Abdul Gani vs United Oriental Steamship Co.&nbsp; </em></strong></p>

<p>&nbsp;</p>

<p>The carrier is a bailee and it is for him to show that he has taken reasonable care of the goods while they have been in his custody.</p>

<p>The bailee is bound to restore the subject of the bailment in the same condition as that in which he received it, and it is for him to explain or to offer valid excuse if he has not done so. It is for him to prove that reasonable care had been exercised.</p>

<p>Where insufficient packing was definitely stated but at the same time it was also stated that the goods were apparently in good order and condition and the shipowner would deliver them in the like order at the port of destination the shipowners must prove facts as to whether they reasonably stowed and dealt with the goods after they were put on board the ship bringing the case within the exception.</p>

<p>The carrier is bound to use care in carrying the goods and where the packages containing them are plainly defective, or become so during the voyage, and he has notice of the defects and might remedy them, he may be liable if he fails to do so.</p>

<p><strong><em>M/S, Abdur Rahman Abdul Gani vs M/S, United Oriental Steam-Ship Co., Karachi and others</em></strong></p>

<p>&nbsp;</p>

<p>Where on account of non-delivery of goods shipped, the defendants have claimed exemption on account of the special condition of owner&rsquo;s risk the onus is on the defendants to explain as to how the goods were dealt with and why they were lost and whether this was despite their taking such reasonable care of the goods as could be taken of goods carried on the deck of the ship.</p>

<p><strong><em>Trans-Oceanic Steam-Ship Co. &nbsp;and others vs Islamic Republic of Pakistan </em></strong></p>

<p>&nbsp;</p>

<p>Carrier&rsquo;s (ship-owner&rsquo;s) liability (when there is no declaration in the bill of lading that the value of each unit of goods is over pound 100), under the law extends to the maximum of pound 100 per unit of goods, and any contract reducing this liability below pound 100 is void.</p>

<p><strong><em>M/S, Abdur Rahman Abdul Gani vs M//S, Karachi Steam Navigation Co., Ltd. </em></strong></p>

<p>&nbsp;</p>

<p>The bill of lading constitutes a contract between the ship-owner and the shipper or the endorsee of bill, but it purports as a rule only to embody the terms of the contract on which the goods are carried, and not the terms of any other contract for any other purpose.</p>

<p>At Common Law, after the contract of affreightment ends, the common carrier incurs a new liability as an involuntary warehouse man or a bailee if the goods still continue to remain in his custody even by reason of some fault of the consignee, and he is bound to take such care of the goods as a prudent man would take of his own goods of the same kind, bulk or value, in similar circumstances.</p>

<p><strong><em>Abdur Rahman Abdul Gani vs Mackinnon Mackenzi &amp; Co. and another </em></strong></p>

<p>&nbsp;</p>

<p>The bill of lading contained the following clause: &ldquo;Goods shipped on deck at shipper&rsquo;s risk&rdquo;.</p>

<p>Relying on this clause, it was argued that the goods, being carried on deck at shipper&rsquo;s risk, are exempt from the Carriage of Goods by Sea Act on account of definition of &ldquo;goods&rdquo; contained in Article 1, sub-clause (c), and that on account of this clause in the bill of lading the carriers are also exempt from liability for the loss or damages arising out of any cause whatsoever.</p>

<p>Held: It cannot be said that the special contract between the shipping company and the plaintiff is of such comprehensive nature as to absolve the company from all liability so as to exclude sections 151 and 152 Indian Contract Act from coming into operation.</p>

<p>By the addition of the clause in the bill of lading, the ship-owner was not exempted from all liability whatsoever for the loss of the goods nor were they excused from giving any explanation for the loss.</p>

<p>The &lsquo;paramount&rsquo; clause in the bill of lading, while stating that all the provisions of the Carriage of Goods by Sea Act will apply, further stated that if any term of lading was repugnant to the Carriage of Goods by Sea Act to any extent it shall be void to that extent and no further. The provisions of the Carriage of Goods by Sea Act do not apply to goods carried on deck.</p>

<p>Held: Simply because the Carriage of Goods by Sea Act does not apply to deck cargo it cannot be said that none of the provisions of the Act are applicable.</p>

<p><strong><em>Trans Oceanic Steam-Ship Co., Ltd. Karachi and others vs Abdul Razak Abdul Kadir and other </em></strong></p>

<p>&nbsp;</p>

<p>In the bill of lading, the drums were described to be second hand with marks dim, drums broken and repaired but at the same time the carrier definitely admitted in the bill of lading that the goods were shipped in apparent good order and condition and that they would be delivered in the like good order and condition at the port of destination.</p>

<p>Held: As there is no case by the defendant ship-owners that the loss was due to any perils dangers and accidents of the sea or other navigable waters, they are, in spite of the provisions in the bill of lading, liable for loss of the plaintiff&rsquo;s goods.</p>

<p><strong><em>M/S, Abdur Rahman Abdul Gani vs M//S, Karachi Steam Navigation Co., Ltd. </em></strong></p>

<p>&nbsp;</p>

<p>The bill of lading constitutes a contract between the ship-owner and the shipper or the endorsee of the bill but it purports, as a rule, only to embody the terms of the contract on which the goods are carried and not of the terms of any other contract for any other purpose.</p>

<p>A clause in the bill of lading to the effect that &ldquo;in all cases, under all circumstances the Company&rsquo;s liability shall absolutely cease when the goods are free of the vessel&rsquo;s tackle and thereupon the goods shall be at the risk, for all purposes and in every respect, of the shipper or consignee&rdquo; cannot be given such wide meaning as to exclude the liability arising from wilful negligence or wanton misfeasance of the shipowner.</p>

<p>Under such a clause, the shipowners are exempt from liabilities which attach to them as carriers only.</p>

<p><strong><em>M/S, Abdur Rahman Abdul Gani vs M/S, Mackinnon Mackenzie &amp; Co. and other </em></strong></p>

<p>&nbsp;</p>

<p>Two clauses in bill of lading, one to the effect that notice is to be given to the consignee and the other saying that such directions are for the purpose of the ship&rsquo;s agent and not for creating any responsibility to the consignee- No obligation to notify the consignee is thereby created.</p>

<p>Shipowner&rsquo;s liability to notify the charterer of the arrival of goods where he is under an obligation by the terms of a contract.</p>

<p>The master of a ship is not bound, in the absence of a special agreement, to notify the arrival of the ship to the consignee of the cargo; the latter are bound to watch for it and to take notice of it without communication.</p>

<p>Where there was contractual obligation imposed on the shipowner to notify the arrival of the ship, the posting of a letter containing notification would be a sufficient performance of the obligation, even though the letter were lost in the post.</p>

<p><strong><em>Mackinnon Mackenzie &amp; Co. vs Eastern Mercantile Co. &nbsp;</em></strong></p>

<p>&nbsp;</p>

<p>The condition in the bill of lading was in these terms: &ldquo;Any claim for short delivery of or damage done to goods, and all other claims whatsoever, to be presented at Karachi and no other port&rdquo;.</p>

<p>Held: The condition is restricted to claim and does not apply to a suit. As the Head Office of the shipping Co. was in Karachi it was stipulated that all claims should be laid there but this clause does not oust the jurisdiction of the Courts at Chittagong. The restrictive clause used the word &ldquo;claim&rdquo;. It does not say anything about suits or actions. Hence, there is no reason to import a limitation which the parties have not seen fit to express in the contract.</p>

<p><strong><em>M/S, United Oriental Steam Ship Co. vs M/S, Jamiluddin and others </em></strong></p>

<p>&nbsp;</p>

<p>Bills of lading though not forming the contract of carriage of goods by sea themselves are first class evidence of contract between the parties.</p>

<p><strong><em>M/S, Abdur Rahman Abdul Gani vs M/S, United Oriental Steam-Ship Co., Karichi and others </em></strong></p>

<p>&nbsp;</p>

<p>The clause as to Court&rsquo;s jurisdiction to try suits can be validly inserted in bill of lading.</p>

<p><strong><em>Tar Mohammad &amp; Co., vs Federation of Pakistan &amp; others </em></strong></p>

<p>&nbsp;</p>

<p>Parties are bound by the terms laid down in the bill of lading.</p>

<p>Where it has been provided in a bill of lading that the parties (viz, the shippers and the consignee) to the contract shall be governed by the laws of England, the contract shall be construed according to the rules for construing English bills of lading. Where, therefore, under the terms of a bill of lading, defendant&rsquo;s liability for loss of goods is stated at pound 100 per unit, the monetary units shall be taken, following the English rule of construction, to be gold value.</p>

<p><strong><em>Mackinnon Mackenzie and Co. of Pakistan Ltd. vs M/S, Dada Ltd., Khatunganj </em></strong></p>

<p>&nbsp;</p>

<p>The plaintiff company filed a suit against the shipping company for recovery of compensation for goods short-delivered. The goods were shipped at a foreign port and for that reason the Carriage of Goods by Sea Act was not applicable to the shipping company. The bill of lading governing the relationship between the plaintiff and the company incorporated the provisions of Article 3, clause 6 of the Schedule to the Carriage of Goods by Sea Act which specifies the period within which a suit for damage must be brought against the company.</p>

<p>Held: The effect of the incorporation of Article 3, clause 6 of the Schedule to the Carriage of Goods by Sea Act into the bill of lading is that the rights of the plaintiff company are extinguished as soon as the period provided therein is over.</p>

<p>The words &ldquo;the carrier and the ship shall be discharged from liability in respect of loss or damage unless suit is brought within one year&rdquo; incorporated in the bill of lading mean that under the contract they will be totally absolved from liability if the suit was not brought within one year.</p>

<p>Suit for damage is to be brought within one year from the date on which the cargo is discharged.</p>

<p>Section 28 of the Contract Act does not hit the contract as embodied in the bill of lading nor does it come within the meaning of local or special law referred to in section 29 of the Limitation Act.</p>

<p><strong><em>Holland Bengal Burmah Line vs Dawood Corporation Ltd. </em></strong></p>

<p>&nbsp;</p>

<p>The plaintiff at the time of shipment paid freight for the entire cargo covered by the bill of lading. On representation of the company that lighter may have to be used for unloading the cargo at the port of destination the plaintiff paid a certain additional sum at the rate of Rs. 20/- per freight ton to meet the lighterage and demurrage charge, if any. As the cargo carrying ship had not to take the help of any lighter to discharge the cargo nor had any demurrage been paid, the plaintiff claimed refund of the additional amount paid to the company to which the latter answered that the amount claimed was really a part and parcel of the freight agreed upon and, therefore, refund of amount cannot be claimed. The company in this connection relied on the endorsement under &lsquo;Freight&rsquo; in the bill of lading which was to the effect that Rs. 20/- per freight ton for lighterage and accordingly contended that the additional charge had been shown in the bills of lading under the rate and freight column and had been included in the total freight payable which implied that it was an additional charge.</p>

<p>Held: The amount deposited at the rate of Rs. 20/- per freight ton was not a part and parcel of the freight. From the mere fact that this amount was mentioned in the bill of lading, it cannot be said that it was a part and parcel of freight.</p>

<p>If the said sum was a part of the freight, the company could have easily mentioned it as such in the bills of lading.</p>

<p>It is, therefore, evident that the company was not entitled to charge this additional amount as freight.</p>

<p><strong><em>M/S, Muhammadi Steam-Ship Co. Ltd. Karachi vs M/S, Abdur Rahim Abdul Gani</em></strong></p>

<p>&nbsp;</p>

<p>Freight is the remuneration payable for carriage of the goods in a ship and is payable on arrival of the goods ready to be delivered to the consignee in a merchantable condition. If agreed upon it is also paid in advance on shipment. Demurrage on the other hand, is a charge for delay in clearing goods at the destination by the consignee.</p>

<p>In the absence of any specific term in the bill of lading about the responsibility of the shippers in respect of the damages caused by the detention, the duty of the shipper or his consignee or assign is to be reasonably diligent in discharging and receiving of the goods at the port of destination. What is reasonable time depends either on the custom of the port or on the facts of a particular case.</p>

<p>The words &lsquo;lighterage&rsquo; and &lsquo;demurrage&rsquo; appearing in the bill of lading and the receipt are used in conjunction and support the contention that demurrage was to be charged in respect of and connected with the use of lighters. Amount charged under the head &lsquo;lighterage and demurrage&rsquo; was only to cover demurrage charges payable to the Port Trust authorities who burdened the shipowners if they&nbsp; stayed at the outer anchorage beyond the time allowed by them.</p>

<p><strong><em>PLR (1960) 2 WP 199.</em></strong></p>

<p>&nbsp;</p>

<p>The bill of lading is a document of title to the goods and may as such be transferred to a third party who makes it subject to everything that appears thereon. It is therefore, both transferable and negotiable. Usually as between carrier and shipper, the contract is contained in the charter party and the bill of lading is not evidence of the contract but only receipt for the goods and at the same time it is also a document which enables the shipper to transfer the goods to a consignee. Therefore, apart from the receipt, the bill of lading in such case is also a document of title.&nbsp;</p>

<p>&nbsp;</p>

<p><strong><em>Abu Bakr Siddique vs M. V. Aghia Thalassini</em></strong></p>

<p>&nbsp;</p>

<p><strong>Section 1- </strong>the importer of the cargo being notifying party enters into the shoes of the supplier-shipper through handing over of Bill of Lading by him to the importer.</p>

<p><strong>Section 1- </strong>Under the voyage charter party agreement the liability of delay in reaching discharge port shifts to the charterer if the delay is caused under agreement with the charterer and the same shall not be transferred to the consignee.&nbsp;</p>

<p><strong>Section 3- </strong>Ship owner remained &lsquo;legal carrier&rsquo; in a &lsquo;voyage charter party&rsquo; agreement and impliedly undertakes that the ship will proceed with reasonable dispatch subject to the condition of the charter party agreement.</p>

<p><strong><em>Jaya Vegetable&nbsp; Oil&nbsp; Ltd vs MT Komandarm Fedko</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 3- </strong>Unless the original copy of the bills of lading is produced before the master of the Vessel the master in no way is liable to deliver the cargo to any person, else he will face the consequence of the offence of conversion.</p>

<p><strong><em>LMJ International Ltd. India vs MV BK Ace </em></strong></p>

<p>&nbsp;</p>

<p><strong>S. 1- </strong>The importer of the cargo being notifying party enters into the shoe of the supplier-shipper through handling over of Bill of Lading by him to the importer.</p>

<p><strong>Section 3- </strong>Ship owner remained &lsquo;legal carrier&rsquo; in a &lsquo;voyage charter party&rsquo; agreement and impliedly undertakes that the ship will proceed with reasonable dispatch subject to the condition of the charter party agreement.</p>

<p><strong>Section 1- </strong>under the voyage charter party agreement the liability of delay in reaching discharge port shifts to the charterer if the delay is caused under agreement with the charterer and the same shall not be transferred to the consignee.</p>

<p><strong><em>Jaya Vegetable Oil Ltd. vs M.T. KOMANDARM FEDKO and others</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p>The general purpose of issuing a HBL is if the forwarder in question wants to control the cargo and not leave it under the direct control of the liner, and also since there will be variation in freights between the HBL and MBL. But there is nothing stopping a forwarder issuing a HBL using the EXACT same details as the MBL, but it&rsquo;s just that such an issuance would be superfluous. Not only superfluous, but it will then mean that there are two documents of title to the same shipment which cannot be the case.</p>

<p><strong><em>Freight Management vs Bangladesh Bank</em></strong></p>

<p>&nbsp;</p>

<p>A house bill of lading issued by a forwarding agent acting solely in the capacity of the agent to arrange carriage is not a bill of lading at all, but at the most a receipt for the goods coupled with an authority to enter into a contract of carriage on behalf of the shipper. It is not a document of title, nor within the Bills of Lading Act, 1855 and it is unlikely that it would ever be regarded as a good tender under a CIF-contract.</p>

<p><strong><em>Freight Management vs Bangladesh Bank</em></strong></p>

<p>&nbsp;</p>

<p>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>CARRIAGE BY AIR (INTERNATIONAL CONVENTION) ACT, 1966</strong></p>

<p><strong>Second Sch., r. 6 (1). </strong>Right of appeal is available to aggrieved party against orders of District Judge in proceedings under the Carriage by Air (International Convention) Act, 1966 read with s. 141. Brother not proved depending upon deceased passenger- Not considered member of family in terms of&nbsp; r. 6(1).</p>

<p><strong><em>Cpt. Rahim Khan vs Miss Nisar Begum</em></strong></p>

<p>&nbsp;</p>

<p>Rules 6 and 7, Second Schedule- No court fee is required for the grant of a certificate by the District Judge following the death of a passenger under rule 6, Second Schedule of Act IX of 1966.</p>

<p><strong><em>Mrs. Nurunnahar Asdar vs Govt. of E. Pak.</em></strong></p>

<p>&nbsp;</p>

<p><strong>CARRIAGE OF GOODS BY SEA ACT, 1925</strong></p>

<p>Carriers by Sea are governed by the Common Law of England. These carriers by sea who offer to carry the goods of all comers in a general ship or who run a line of ships from port to port habitually carrying all goods brought to them are under the Common Law common carriers and thus incur the same liability in respect of loss or damage to the goods carried by them as inland navigation carriers subject to any express exceptions relieving them from such liability.</p>

<p>The position is not different where instead of a charter party agreement there is only a bill of lading.</p>

<p>The liability of a shipowner at Common Law is much higher than that of a bailee, for, he is in the position of an insurer.</p>

<p><strong><em>Abdur Rahman Abdul Gani vs Mackinnon Mackenzie </em></strong></p>

<p>&nbsp;</p>

<p><strong>Art. III</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Where liability of a common carrier does not arise under the bill of lading, but apart from it (in the present case the common carrier has been held to be liable as a bailee), the special limitation prescribed by the Carriage of Goods by Sea Act does not apply, and in such a case the suit must be held to which Article 115 of the first Schedule to the Limitation Act shall apply.</p>

<p>Where the liability of the ship-owner does not arise under the bill of lading but, apart from it by implication, under the principles of the English Common Law, the special limitation of one year provided by Article III of the &lsquo;Rules relating to the bills of lading&rsquo; set out in the Schedule to the Carriage of Goods by Sea Act does not apply but Article 115 of the first Schedule to the Limitation Act governs the case and applies.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>A. Rahaman A. Gani vs Mackinnon Mackenzie</em></strong></p>

<p><strong><em>&nbsp;</em></strong></p>

<p>Carrier&rsquo;s liability to deliver goods in good condition when they admitted that they received them &lsquo;in apparent good order and condition&rsquo;.</p>

<p><strong><em>Abdur Ranman Abdul Gani vs Karachi Steam Navigation </em></strong></p>

<p>&nbsp;</p>

<p><strong>Article III, Clause (3)</strong> Time taken under section 80, C. P. Code is to be deducted in case of a suit filed under Art. III, Clause of the Carriage of Goods by Sea Act.</p>

<p>The burden of proving when goods shipped ought to have been delivered lies on the shipper.</p>

<p><strong><em>United Oriental Steamship vs Jamiluddin </em></strong></p>

<p><strong><em>&nbsp;</em></strong></p>

<p><strong>Art. III, Rule 6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>A ship is discharged from all liabilities under rule 6 of Art. 3 of the Schedule to the Carriage of Goods by Sea Act in respect of loss or damage of the goods unless the suit is brought within one year after the delivery of the goods or the date when the goods should have been delivered.&nbsp;</p>

<p>The expression &ldquo;all liability in respect of loss or damage&rdquo; does not leave any claim, (such as payment of custom duty and other charges on account of the goods) which is directly or remotely connected with the loss or damage of the goods, outside its meaning.</p>

<p><strong><em>Gladstone Wyllie &amp; Co. vs Shahidi Trading Corporation</em></strong></p>

<p>&nbsp;</p>

<p>Rule 6 of Article III of the Carriage of Goods by Sea Act is limited to the contract of carriage which ends with the discharge of the cargo by the ship at the place of landing and, after the contract of affreightment ends, the carrier incurs a new liability as bailee and the limitation for bringing a suit in that case would be 3 years under Article 115 of the Limitation Act.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong>Art. III, rule 8 and art., IV, rule 5 </strong>Carrier&rsquo;s (shipowner&rsquo;s) liability (when there is no declaration in the bill of lading that the value of each unit of goods is over pound 100) under the law, extends to the maximum of pound 100 per unit of goods and any contract reducing this liability below pounds 100 is void.</p>

<p><strong><em>Abdur Rahman Abdul Gani vs Karachi Steam Navigation</em></strong></p>

<p>&nbsp;</p>

<p>At Common Law, after the contract of affreightment ends, the common carrier incurs a new liability as an involuntary warehouseman or a bailee, if the goods still continue to remain in his custody even by reason of some fault of the consignee, and he is bound to take such care of the goods as a prudent man would take of his own goods of the same kind, bulk or value, in similar circumstances.</p>

<p>&nbsp;</p>

<p>Where liability of a common carrier does not arise under the bill of lading, but apart from it (in the present case the common carrier has been held to be as liable as a bailee) the special limitation prescribed by the Carriage of Goods by Sea Act does not apply, and in such a case the suit must be held to be governed by the general law of limitation to which Article 115 of the first Schedule to the Limitation Act shall apply.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Abdur Ranman Abdul Gani vs Mackinnon Mackenzie &amp; Co. </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Sec. 4.&nbsp; </strong>Provision of the section is not applicable to contracts where the port of lading is not in Pakistan.</p>

<p><strong><em>Makinnon Mackenzie &amp; Co. vs Dada Ltd.</em></strong></p>

<p>&nbsp;</p>

<p><strong>Art. III, r. 2 and Art. IV, r 1 :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Initial onus of proving that the cargo carried under the bill of lading was delivered at the port of destination in damaged condition is on the consignee (owner of the goods)- The onus thereafter shifts on to the carrier first to prove that he took all reasonable care while the cargo was in his custody and then to prove that the cargo was damaged under circumstances beyond his control, which exonerates him from the liability of such damage under the provisions of the Act.</p>

<p><strong><em>Muhammadi Steamship Co. Ltd. vs Province of E. Pakistan</em></strong></p>

<p>&nbsp;</p>

<p><strong>Art. III, Clause 6. </strong>Shipments of goods between inter ports in Pakistan and between one in Pakistan and one outside Pakistan- suit shall be governed, for limitation purpose, by the Act.</p>

<p>Shipment of goods from a foreign port to one in Pakistan- limitation for the purpose of suit- will be governed by the terms of the bill of lading.</p>

<p>The expression &ldquo;one year after delivery of the goods or the date when the goods should have been delivered&rdquo; occurring in Article III, clause 6, really means one year after discharge of the goods or the goods should have been discharged.</p>

<p>The word &lsquo;discharged&rsquo; implies complete discharge of all the goods covered by the consignment. Hence in a case where the goods are completely discharged, the period of one year shall be calculated from the date of discharge of the goods.</p>

<p><strong><em>New Zealand Insurance Co. Ltd. vs M. A. Rouf. </em></strong></p>

<p>&nbsp;</p>

<p><strong>Art. IV, Para. 2(c).</strong> When the cargo was damaged by heat from the engine boilers, which did not pass away as usual owing to the necessity of closing the ventilators during prolonged bad weather such damage was held to be by &ldquo;accidents of the sea, rivers and steam navigation.&rdquo; But in such cases it is not the lack of ventilation but the peril of incursion of sea water against which the ventilators are closed which is to be considered as the &lsquo;peril of the sea&rsquo;.</p>

<p><strong><em>Adam Ltd. vs Muhammadi Steamship Co. Ltd. </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Art. IV, r. 5 &amp; Art. 11, r. 8. </strong>Where liability has been fixed, as witnessed by the bill of lading between the parties, at a sum below pound 100 per package, such a contractual term in the bill of lading is null and void.</p>

<p>Held: In view of the provisions of rule 8 of Article III of the Carriage of Goods by Sea Act, 1925, read with rule 5 Article IV, clause 9 of the bill of lading must be held to be null and void as it seeks to limit the liability of the carrier to less than pound 100 per package or unit. Clause 9 of the bill of lading comes within the mischief of the third sub-paragraph of rule 5 of Article IV, which specifically requires that when the maximum liability of the carrier is fixed the minimum rate per package or unit must be pound 100, which is the figure representing maximum liability under the first sub-paragraph. In other words whenever a maximum liability is assessed by parties, the assessment cannot be less than pound 100 per package or unit.</p>

<p><strong>Art. IV, r. 5. </strong>The first sub-paragraph of rule 5 of Art. IV provides that, if the shipper does not specify the value of the goods per package or unit, then the liability of the carrier is subject to a maximum of pound 100. The second sub-paragraph states that, if a declaration of a specified value is made, it would be prima facie evidence as to the value of the goods, but such valuation would not bind the carrier who may prove that the goods were of lesser value. The third sub-paragraph requires that if a maximum liability per package or unit, as mentioned in the first sub-paragraph, is fixed by parties to the contract, such liability cannot be less than the maximum amount specified in the sub-paragraph, namely, pound 100. That is to say, it provides that the maximum assessment of such liability must be the maximum stated under the first sub-paragraph.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Karachi Steam Navigation Co. vs Abdur Rahim </em></strong></p>

<p>&nbsp;</p>

<p><strong>Clause 6, Schedule. </strong>Suit for damages for non-delivery to be filed &ldquo;within one year of the date when the goods should have been delivered&rdquo; what the words really mean has to be determined in accordance with the provision of Contract Act-Time for performance of contract can be extended under section 63 of the Contract Act.</p>

<p><strong><em>Abdul Jalil Chowdhury vs Muhammad Steam ship Co. Ltd. and Federation of Pakistan </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Rule 6, Art. III. </strong>Damages for non delivery of the goods from the shipping company&rsquo;s lighter after unloading them from the ship. Liability of the shipping company for loss of goods not that of a bailee but of carriers, to which Rule 6, of Article III is attracted.</p>

<p><strong>Rule 6. Art. IV. </strong>Rule 6 of Art. IV of the Carriage of Goods by Sea Act lays down that the maximum limit of a claim to be fixed by agreement between the carrier and the shipper may exceed the figure of pound 100 but cannot be lower than this figure.</p>

<p><strong><em>Messrs. Karachi Navigation Co. Ltd. vs Messrs. Abdur Rahman, Abdul Gani </em></strong></p>

<p><strong><em>&nbsp;</em></strong></p>

<p>Hague Rules, Article 1(e) Rules 2 &amp; 8 of Article III-The defendant ship to which the goods were consigned remains responsible for the safe delivery of the goods to the port of discharge-Any transfer of goods to another ship does not absolve the defendant ship from its responsibility.</p>

<p>Duration of carrier&rsquo;s responsibility.- &ldquo;The operation of the Carriage of Goods by Sea Act, 1925, in this behalf would commence from the time when the goods are loaded on the ship and would continue till their discharge from the said vessel at the destined port. This is clear from the definition of &ldquo;carriage of goods&rdquo; in Article 1 (e) of the rules in the said Act.&rdquo; Article 1 (e) &ldquo;Carriage of goods covers the period from the time when the goods are loaded on to the time they are discharged from the ship.&rdquo;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>&nbsp;Helenic Lines vs Bangladesh </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Articles III and IV- </strong>As soon as the shipper delivers goods to the carrier at the port of origin in good condition he is entitled to receive the goods at the port of destination in the same good condition and the carrier will be held responsible for the loss or damage to the goods which are in his care and custody.</p>

<p>There is no onus under the law on the plaintiff to prove that the goods were damaged due to the negligence of the employees of the carrier while in the ship. It is not possible for the shipper to prove negligence or misconduct of the employees of the carrier while the goods were in the ship in their care and custody and it is for the carrier to show that his employees took due care and caution as reasonable men of ordinary prudence for the protection and preservation of the goods. That is why law provides that initial onus is on the shipper to show that he delivered the goods in good condition and received the same in damaged condition and then the onus is shifted on the carrier to prove that its employees took due care and caution as a reasonable man of ordinary prudence to protect the goods but in spite of their taking such action due to circumstance beyond their control such as perils of the sea, act of Good, etc the goods were damaged.</p>

<p><strong><em>Transoceanic Steamship Co. Ltd. vs Adamjee Insurance Co. Ltd. </em></strong></p>

<p>&nbsp;</p>

<p><strong>Article 3, rule 6 of the Schedule- </strong>The carrier and the ship shall be discharged from all liabilities in respect of loss or damage unless suit is brought within one year after delivery of the goods or the date when the goods should have been delivered.</p>

<p><strong><em>Continental Traders vs Bangladesh Textile Mills Corporation </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 19- </strong>From the jurisdiction clause in the bills of lading it is clear that the contract in question would be governed by the law of the place where the carrier has his principal place of business. Hence the Carriage of Goods by Sea Act, 1925 would be the law applicable to the instant voyage. Accordingly, the Courts in Bangladesh would have exclusive jurisdiction over any dispute arising out of the carriage of goods. However, this did not prevent the plaintiff from litigating in Singapore.</p>

<p><strong><em>Eximpo Trading Limited vs MV Banglar Kakoli </em></strong></p>

<p><strong><em>&nbsp;</em></strong></p>

<p><strong>Section 19- </strong>That the words in Clause 6 of Article III of the Schedule to the Carriage of Goods by Sea Act, 1925 are apt to express an intention of total extinction of the liability and national character of the legislation, be construed in that sense. It is hardly necessary to add that once the liability is extinguished under this clause, there is no scope of any acknowledgment of liability there under.</p>

<p><strong><em>Eximpo Trading Limited Vs MV Banglar Kakoli </em></strong></p>

<p><strong>Section 2- </strong>Having, therefore, had regard to the above referred provisions of section 4(4)of the Admiralty Court Act, 2000 and section 2 of the Carriage of Goods by Sea Act and having perused, in particular, this Court&rsquo;s previous order in Admiralty Suit No. 27 of 2005 that dealt with a similar dispute arising out of the same facts and circumstances, this Court is inclined to hold that the order of arrest of 10-07-2007 of the vessels &lsquo; MV Lady Fatima&rsquo; and &lsquo;MV Da Li&rsquo; is not sustainable in law. It is at this juncture that this Court is additionally put on notice of the fact that of the two vessels subject to that order of arrest, one vessel namely &lsquo;MV Lady Fatima&rsquo;, did not, in fact, call on and was not available at Chittagong Port at any material time. This Court has taken note of the fact, and as asserted in the supplementary affidavit filed on behalf of the defendant Nos. 1, 2 and 15, that in making the order of arrest on 10-07-2007 this Court possibly did not have the benefit of all relevant facts and circumstances of this case placed before it.</p>

<p>Accordingly, the application is allowed. The Order of arrest of the vessel &lsquo;MV Da Li&rsquo; is hereby vacated and it is ordered that the vessel &lsquo;MV Da Li&rsquo; now berthed at Chittagong Port, Chittagong be forthwith released from arrest. In the light of the fact that the other vessel &lsquo;MV Lady Fatima&rsquo; had never been effectively the subject of the order of arrest dated 10-07-2007, that order of arrest to the extent that it applied to the vessel &lsquo;MV Lady Fatima&rsquo; necessarily also stands vacated.</p>

<p><strong><em>HRC Shipping Ltd vs &lsquo;MV Lady Fatima&rsquo; and &lsquo;MV Da Li&rsquo;</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Article 1(a)- </strong>Excalivor Logistic is neither an owner nor a charterer of the vessel and had no authority to issue any bill of lading. The bill of lading placed by the petitioner was not a bill of lading.</p>

<p><strong><em>Ibrahim (Md.) Vs Bangladesh (Spl Original)</em></strong></p>

<p>&nbsp;</p>

<p><strong>Article 3 Rule 6- </strong>Unless a suit is brought against the carrier within 1 year from the date of discharge of the cargo the suit is barred by limitation.</p>

<p><strong><em>Polish Ocean Lines vs Al-Amin Seatrans Ltd.</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>CARRIERS ACT, 1865</strong></p>

<p><strong>Secs. 6, 8 and 9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>In a suit for the realisation of compensation under sec. 9 of the Carriers Act on the ground of negligence on the part of the carrier or its servants or agents, it is not necessary for the plaintiff to prove that such loss, damages or non-delivery was owing to the negligence or criminal act of the carrier, his servants or his agents.</p>

<p>Section 6 of the Carriers Act enables the parties by a special contract to reduce their liabilities in certain circumstances but, in view of sec. 8 of the Act, it is hardly tenable to suggest that even without proof of relevant or requisite circumstances the liability as such can be said to be nil altogether. If there is a special contract, then evidence should be adduced to show as to the extent or degree of reduction of liability claimed on the basis of such a special contract.</p>

<p><strong><em>Dada Ltd. vs R. S. N. Co. Ltd. </em></strong></p>

<p>&nbsp;</p>

<p><strong>Sec. 8 </strong>The principle of determining the liability of a common carrier for loss of, or damage to, property or goods arises as soon as it is delivered to be carried and it is irrelevant who delivers the same to it. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>R. S. N. Co. vs Mabendra Kr. Roy </em></strong></p>

<p><strong><em>&nbsp;</em></strong></p>

<p>Liability of common carriers---Limited by contract---goods carried by two or more separate carriers, liability for loss or damage, under terms of contract, distinct and separate.</p>

<p><strong><em>I. S. N &amp; Rly Co. vs Mehendra Kr. De. </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Sec. 8 &amp; 9 </strong>The position of a public carrier in respect of goods entrusted to its care is that of a bailee. To escape liability, taking of reasonable care must be proved.</p>

<p><strong><em>R.S.N. Co. vs Dada Ltd. </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p>Liability of common carrier- No privity of contract between owner of goods and common carrier required for making the carrier liable for loss due to carrier&rsquo;s own negligence- Owner also not required to deliver the goods personally.&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>The Rivers Steam Navigation Co. Ltd. vs District Council of Bakerganj </em></strong></p>

<p>&nbsp;</p>

<p>When the goods made over to the defendant but was not delivered in time when such delivery became due but delivered after a long time of unexplainable delay the defendant is liable for damage. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Rivery Steam Navigation Co. Ltd. vs District Council, Bakerganj </em></strong></p>

<p>&nbsp;</p>

<p>From the relevant provisions of the Carriers Act and the Contract Act and the judicial decisions, it can be accepted as the established principle that breach in a common carrier&rsquo;s duty is a breach of the law; and for this breach an action lies founded on the Carriers Act, and the same is not dependent on the aid of the contract to support it.</p>

<p><strong><em>B. I. W. T. C. vs Hellenic Lines Ltd. </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Sec. 10. </strong>It was urged that in view of the provisions of section 10 of the Carriers Act, the plaintiff could maintain this suit after giving six month&rsquo;s clear notice to the carriers, that is, to the defendant Nos. 1 and 2 but as no such notice was given to the defendant No. 2 the suit is not maintainable.</p>

<p>In reply it was submitted that a combined notice under section 77 of the Railways Act was served on defendant No. 1 as well as on the defendant No. 2 and as the contract was entered into by the defendant No. 1, that notice was sufficient under section 10.&nbsp;</p>

<p>This contention of the plaintiff was upheld and it was held that sufficient notice was given to the defendant and hence that there has been a compliance with the provision of section 10 of the Carriers Act.</p>

<p><strong><em>R. S. N. Co. vs District Council, Bakerganj </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>CHITTAGONG PORT ACT, 1914</strong></p>

<p><strong>Sec. 50B</strong> If the condition of the imported goods worsens inspite of the port authority&rsquo;s due care for them, for any damage to the goods that may occur after the schedule time the responsibility thereof passes to the consignee or owner.</p>

<p>As it is a case of loss of the suit car while in the custody of the statutory bailee, it does not come under the purview of section 50B of the Chittagong Port Act. This finds support in the case of Chittagong Port Authority Vs Md. Ishaque and others. &nbsp;(1983) 35 DLR (AD) 364.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Trustees of the Port of Chittagong vs K. Mahbub Hossain </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>S. 57(1)(c).</strong> The petitioners are a Company dealing with oil and petroleum products at Chittagong. For their business they constructed on their own land, jetties, tanks, wharves and other equipments for loading and unloading oil and petroleum products from their tankers to their tanks.</p>

<p>The respondents who are the Trustees of the Chittagong Port have their own moorings which are used by the petitioners for handling of their tankers.</p>

<p>The respondents on the basis of a notification imposed and realized tolls from the petitioners on account of shipping and landing charges for handling done at Commissioner&rsquo;s moorings under section 57(I)(e) of the Chittagong Port Act and this was objected to by the petitioners who contended that though they are liable for using the Trustees&rsquo; moorings, they are not liable to pay any charge for landing or shipping goods at Trustees&rsquo; moorings. They further argued that &ldquo;landing&rdquo; in the notification has reference to land and there cannot be any landing on the surface of the buoys.</p>

<p>Held: The goods might not be said to be landed if they were put there with the means and right of taking them up on to the land. As a matter of good sense it might perhaps be that though goods would not be landed in the usual sense of the word until they had got to the land, yet as soon as in any manner they had reached what might be considered as the end of their transit that might be called a landing.&nbsp;</p>

<p>The tolls levied by the respondents is not for landing in the sense of using any land, wharves jetties etc. of the Trustees which come under clause (b) of section 57(I) of the Act but for use of the moorings under clauses (c) for landing or shipping the goods by the owner of the goods.&nbsp;</p>

<p><strong>Sec.57 (3) &ndash;</strong> Publication in the manner specified in sub-section (3) of section 57 of the Chittagong Port Act is not the tolls or taxes and therefore non-compliance with the provisions of sub-section (3) will not render the scale of tolls, rates and charges illegal or void.</p>

<p><strong><em>Standard Vacuum Oil Co. vs Trustees </em></strong></p>

<p>&nbsp;</p>

<p><strong>Sec. 63 read with sec. 50B-</strong>Section 63 provides that where the conditions as laid down in section 50B are fulfilled in that case trustee may cause such goods to be removed either to any warehouse belonging to them or with the consent of the Custom Collector of the port to the public warehouse and the removal in such warehouse shall be at the risk and expense of the owners of the said goods.</p>

<p><strong>Sec. 63 (2)(3)(4) and Sec. 64-</strong>Consignees or owners to be notified as well by publication in paper when the goods are removed- Port Authority empowered to sell the goods after expiration of two months by auction or within 24 hours in case of perishable goods.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Trustees of the Port of Chittagong vs K. Mahbubul Hossain </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>S. 109 (2) </strong>S. 109(2) of the Chittagong Port Act does not lay down a special period of limitation for actions and purported actions under the Chittagong Port Act.</p>

<p>Suit against Port Trust is maintainable from the date of the knowledge that the goods have landed into the care and custody of the Port Trust.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>The Trustees of the Port of Chittagong vs Sadharan Bima Corporation </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 109(1) -</strong> It is well settled principle of law that a question of law can be raised even in the Court of last resort even though not raised before. Moreover, the following observation of their Lordships in Trustees of Chittagong Port vs Sadharan Bima, 32 DLR 99 is complete answer to the contention of Mr. Mokbul Ahmed &ldquo;The defendant Port Trust is not even required to take up the defence that no notice under section 109(1) has been served. It is also not competent to waive the mandatory requirement of notice.&rdquo;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p>In view of the provisions of section 109(1) of the Chittagong Port Act, 1914 the court has no alternative but to dismiss the suit where the plaintiff fails to comply with the mandatory requirement of section 109 (1) of the Act. In this case, no notice having had been issued as contemplated in section 109(1) of the Act the suit must be dismissed notwithstanding the fact that no plea was taken by the defendant that the suit is liable to be dismissed for want of notice or that the defence waived the requirement of such notice by not raising the plea of want of notice.&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</p>

<p>In this case as the owner of the drums did not remove the same from the jetty premises, without any fault on the part of the Jetty Administration, within clear 7 working days from the time of lading of the drums in question the Jetty Administration is not liable for any loss as in this case the Port Authority informed the owners of the drums to find out the same and there was no fault on the part of the Port Authority to locate the goods.&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p>It is true that under section 50A of the Chittagong Port Act the Port Authority is responsible for the loss of goods landed and remained in its possession or control as a bailee in view of the provisions of section 151,152 and 161 of the Contract Act, 1872. But section 50A will not operate in a case where the goods landed under nil mark and the consignee fails to follow the nil mark procedure to locate the goods by reason of sub-rule (f) and (g), Rule 64 of General Rules and the Schedule for Working of the Chittagong Port (Railway) Jetties. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Chittagong Port Authority vs Hong Kong Shipping Lines</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 50B(2)- </strong>It is admitted that the defendant No. 5 as clearing agent of the plaintiff did not take any step for delivery of the consignments from the defendant No. 2, local agent of&nbsp; defendant No. 1 within stipulated period of time i.e. five days under section 50B(2) of the Chittagong Port Act. The plaintiff handed over documents to his clearing agent, defendant No. 5, for the purpose of clearance of the goods from the Chittagong Port on 02-06-74 and said clearing agent approached the defendant No. 3 for obtaining delivery of the suit consignment after a lapse of about four months. Moreover, the plaintiff or his clearing agent, the defendant No. 5 did not take any step to get the alleged damaged goods surveyed before 29-07-74 though they knew that some cartons landed with trivial damage, which was nominal and of trivial nature due to normal handling. Trial Court only considering the report of surveyors surveyed on behalf of the plaintiff decreed the suit against the defendant Nos. 1 and 2 only, which cannot be sustained in law.</p>

<p><strong><em>Mitsui OSK Lines Ltd vs Bangladesh Jatiya Mashayajibi Samabaya Samity Ltd. </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>CHITTAGONG PORT AUTHORITY ORDINANCE, 1976</strong></p>

<p><strong>Section 19- </strong>The Admiralty Judge, in allowing the vessel to leave the territorial waters of Bangladesh without payment of her dues payable to the Chittagong Port Authority, travelled beyond his jurisdiction.</p>

<p><strong><em>&nbsp;Chairman Chittagong Port Authority &amp; another vs Ministry of Defence and others </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 19- </strong>The Regulations and the charge of schedule are read together and accordingly the levy is to be calculated. If we read both these together then it appears that Regulation 163(2) does not have any Sub-Regulation which would attract that the rent of open space shall be half of the rate. So the note contained in charge of schedule does not have any nexus with Regulation 163(2), the note shall be in Regulation 163(1) as the Sub-Regulation indicates the same.</p>

<p><strong><em>Chittagong Container Transportation Company vs Bangladesh </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p>The survey Report is not a cogent evidence of loss at the time of discharge. The Carrier&rsquo;s liability, if any, is determined in terms and conditions of the cargo recorded at the time of discharge when the goods are removed from the vessel itself.</p>

<p>In the instant case plaintiff respondent No. 1 imported a consignment of 1387 drums Creosote Oil from UK, and found 33,250 Ibl shortage due to drums were leaky, mouth open, rusty and second hand. The plaintiff sustained loss of taka 83,496.80 and claimed compensation. Trail Court decreed the suit against defendant No. 1 for the amount claimed. High Court Division held that the trail court illegally decreed the suit only against the present defendant No. 1 appellant.</p>

<p><strong><em>Bangladesh Shipping Corporation vs Bangladesh Railway Board and others</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>CHITTAGONG PORT (RAILWAY JETTIES) RULES</strong></p>

<p>General Rules and schedules working of the Chittagong Port Railway Rules 122 clause (a) (ii) - Responsibility of issuing short-landing certificate for imported goods being that of the Port Authority (Chittagong), the Authority&rsquo;s failure to notify the consignee (plaintiff) that a certain portion of the short-landed goods were lying in certain shed not known to the plaintiff, will exonerate the plaintiff of any liability if he fails to take delivery of the same. In case these goods were in damaged condition the plaintiff, if he had such notice, could have them duly surveyed to ascertain the measure of damage for claiming compensation.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p>The trail Court decreed the plaintiff&rsquo;s suit on contest. On appeal the High Court Division modified the trail Court&rsquo;s decree holding that the plaintiff could get compensation in respect of the difference between 5567 bags and 3337 bags, that is, 2230 bags; according to the High Court Division, 3337 bags out of 5567 bags were laying in Shed No. 5 of which the plaintiff failed to take delivery and on account of its failure to clear those bags from the shed it is not entitled to claim any compensation thereof.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p>Unless it could be shown that the plaintiff applied to the Port Authority for storing the cement bags and after obtaining its permission entered into an open storage agreement, as referred to in clause (a) of Rule 122, the exemptions provided in the sub-clause (ii), cannot be claimed by the Port Authority. The plaintiff did not have an iota of knowledge regarding either the storage or the number of cement bags claimed to have been stored by the Port Authority.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Bangladesh Railway vs Messrs Chartering and Shipbroking Corporation </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>CHITTAGONG PORT REGULATIONS FOR WORKING (CARGO AND CONTAINER), 2001</strong></p>

<p><strong>Regulation 163(1) and 163(2) - </strong>The Regulations and the charge of schedule are read together and accordingly the levy is to be calculated. If we read both these together then it appears that Regulation 163(2) does not have any Sub-Regulations which would attract that the rent of open space shall be half of the rate. So the note contained in charge of schedule does not have any nexus with Regulation 163(2), the note shall be in Regulation 163(1) as the Sub-Regulation indicates the same.</p>

<p><strong><em>Chittagong Container Transportation Company vs Bangladesh </em></strong></p>

<p><strong><em>&nbsp;</em></strong></p>

<p><strong>Regulation 163(1)(2)- </strong>In the present case, the space let out is outside the port protected area and it falls within the regulation 163(2) which admittedly do not contain any sub-regulation as to the rate. It appears that Regulation 163(2) does not have any sub-regulations from which it could be enforced that the rent of open space shall be half of the rate.</p>

<p><strong><em>Chittagong Container Transportation Company vs Bangladesh </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Provision 2.4-</strong> Depositing the customs duty and other charges to the customs authority does not itself mean automatic delivery of the goods. But, the petitioner is required to obtain a clearance certificate from the customs authority.</p>

<p><strong><em>Ibrahim (Md.) vs Bangladesh (Spl Original)</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>COURTS OF ADMIRALTY ACT, 1891</strong></p>

<p>On the day when the Courts of Admiralty (Pakistan) Act (adopted) was enacted in 1891 the High Court had the same jurisdiction over inland water ways in the province which is similar to that of the Court of Admiralty in England.&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Haji Mohammad Suruj Mia vs Owners of M. L. Madina </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p>The Court of Admiralty of High Court Division has derived its jurisdiction from these Acts- The suit is maintainable.</p>

<p><strong><em>Muhajak Shipping Co. Ltd. vs MV Sagar</em></strong></p>

<p><strong><em>&nbsp;</em></strong></p>

<p>Causes arising out of a contract of marine insurance would come under the provisions of Admiralty Act of 1861 for this court to have jurisdiction.&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Bengal Liner Ltd., Dhaka vs Sadharan Bima Corporation</em></strong></p>

<p>&nbsp;</p>

<p><strong>Section 6- </strong>The Admiralty judge, in allowing the vessel to leave the territorial waters of Bangladesh without payment of her dues payable to the Chittagong Port Authority, travelled beyond this jurisdiction.</p>

<p><strong><em>Chairman Chittagong Port Authority &amp; another vs Ministry of Defence and others </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>EVIDENCE ACT, 1872</strong></p>

<p><strong>Section 74- </strong>Procuring copy from the public body of private documents does not made the private document a public document.</p>

<p><strong>Section 87- </strong>Judicial notice of distance of any place may be taken through the internet by log in to Google map.</p>

<p>The plaintiff is a reputed company having Edible Oil Refining Industry, engaged in the business of refining crude Soya bean oil, imported crude degummed Soya bean Oil, in short CDSO, FROM Buenos Aires, Argentina in bulk through opening LC. In the instant case the plaintiff has claimed compensation on the loss due to reduction of price in the Soya bean oil as a consequence of late delivery of the consignment from the defendant vessel at a delay of 61 days. The learned court held that the alleged delay in delivery of the cargo is well within the terms of breach of contract which squarely adjudicatable by the Admiralty Court as comes under the provisions of Section 6 of the Admiralty Court Act, 1861. The Court has also found that the defendant vessel reached Chittagong Port very late in derogation of the terms and conditions of the contract of carriage and as such this court finds that the plaintiff has good cause of action for the instant Admiralty suit under the bundle of facts and circumstances and decreed the suit in part in favour of the plaintiff for realization of an amount of Taka 28, 89, 673. 00 &nbsp;as compensation from the defendant No.1 and 3.</p>

<p><strong><em>Jaya Vegetable Oil Ltd. vs M.T. KOMANDARM FEDKO and others</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>HAGUE RULES</strong></p>

<p><strong>Article III, rules 2 and 8- </strong>Subject to the provisions of Article IV, the carrier shall properly and carefully load, handle, stow, carry. Keep, care, for and discharge the goods carried. &ldquo;Any clause, covenant or agreement in a contract of carriage relieving the carrier of the ship from liability for loss or damage to or in connection with goods arising from negligence, fault or failure in the duties and obligations provided in this Article or lessening such liability otherwise than as provided in these Rules, shall be null and void and of no effect.</p>

<p>A benefit of insurance or similar clause shall be deemed to be a clause relieving the carrier from liability&rdquo;.</p>

<p><strong><em>Hellenic Lines vs Bangladesh </em></strong></p>

<p>&nbsp;</p>

<p><strong>INLAND SHIPPING ORDINANCE,</strong> <strong>1976</strong></p>

<p><strong>Section 52-</strong> Award of compensation by the Marine Court is as good as a decree passed by a civil Court and, as such, the present admiralty suit is totally misconceived. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>BIWTC vs Nazma Transport Company</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 52- </strong>There is nothing in the Shipping Ordinance barring the jurisdiction of Admiralty Court to entertain any claim for damages done by any ship.</p>

<p><strong><em>Bangladesh Inland Water Transport Corporation vs Al-Falah Shipping Lines Ltd. And others </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 52- </strong>The Admiralty Court has jurisdiction to entertain and decide suit for compensation arising out of the cause taking place both in inland water and on the high seas.</p>

<p><strong><em>Bangladesh Inland Water Transport Corporation vs Al-Falah Shipping Lines Ltd. And others </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 54- </strong>The non-compliance of these rules will not make the timetable issued under Rule 15(1)(c) in favour of MV Miraj to be illegal and without any lawful authority.</p>

<p><strong><em>Sirajul Hoque and other vs BIWTA represented by its Chairman and others </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>MARINE FISHERIES ORDINANCE, 1983</strong></p>

<p><strong>Section 4 and 5- </strong>The power conferred on the Director is a statutory power. The legislators in their wisdom have validated the Ordinance by the 7th Amendment to the Constitution and the power given to the Director being statutory in nature cannot be exercised by anybody not permitted by the Ordinance. The power exercisable by the Minister is executive in nature and is regulated by the Rules of Business.</p>

<p><strong><em>Mohammed Ali vs Director, Marine Fisheries Office</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 8- </strong>Law does not require the petitioner to procure any prior approval or permission of the Ministry of Fisheries and Livestock as a condition precedent to grant registration and licence to his trawler.</p>

<p><strong><em>Jane Alam (Md) vs Government of Bangladesh</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>MARINE INSURANCE ACT, 1906</strong></p>

<p><strong>Section 18(3)(b)- </strong>Appellant has failed to make out a case of non-disclosure of any material fact on the part of the assured- Circumstance as complained was known to the insurer in the ordinary course of business.</p>

<p>Express warranty in the insurance policy- Disclosure of the fact of insufficient packing- Condition of insurance includes the risks of breakage.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong>Section 55(2) (c)-</strong> Inherent vice- Interpretation by English Courts of inherent vice &ndash; Insurer not responsible.&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong>Section 55(2) (c)- </strong>Section 55(2)(c) being qualified, parties to be governed by the contract itself. The policy in the present case described risks including the risks of breakage and splitting subject to replacement clause and these words must be held to constitute a sufficient contrary provision.</p>

<p><strong><em>Mercantile Fire and General Insurance Company vs Bata Shoe Co. </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Determination of Marine Insurance- </strong>As there is no law on marine insurance in the statute-book in Bangladesh in determining issues of marine insurance in general and the issue of unreported damage in particular the English law and practice will be applied as stipulated by the Institute Time Clause (Hull) attached to the policy and in the absence of such stipulation the Courts of Bangladesh will follow the English Law and practice in keeping harmony with the decisions of England as done in a case by an American Judge.</p>

<p><strong>Section 69(3) - </strong>The insured can recover by way of one-time repair or several repairs during the currency of the policy but when the ship had not been sold in her damaged state during the risk the question of unrepaired damage will arise only after the policy terminates which is a matter of calculation and it can never be the subject matter of a pre-determined amount in the policy.</p>

<p><strong>Section 69(3)- </strong>When a newly built ship is insured for the first time and meets with an accident during the currency of the policy then the market value and the insured value of a vessel may be the same but when the ship ages, its market value declines and the insured value will not represent her sound market value, because there are other considerations which weigh with both the insured and the insurer in putting an insured value on a vessel. The market value of vessel will not be presumed to be her insured value, except in rare cases and the burden of proving the sound market value of the vessel at the termination of the policy will be on the plaintiff who claims on the policy. &ldquo;A contract of marine insurance is a contract of indemnity, that is, the amount recoverable is measured by the extent of the assureds&rsquo; pecuniary loss but it is never a contract of guarantee or a contract of compensation for damages.&rdquo;&nbsp;&nbsp; &nbsp;</p>

<p><strong><em>Sadharan Bima Corporation vs Bengal Liner Ltd. and others </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Section 55- </strong>Admittedly, the defendant issued the Insurance cover on 02-05-1983 on receipt of the first installment of the premium with the stamp duty. After issuance of the Marine Policy the Sadharan Bima Corporation cannot be heard to den payment of the amount covered by the insurance policy if the trawler capsized at any time after the insurance cover was issued on 02-05-1983. The trawler sailed on 02-05-1983 and capsized on 05-05-1983. The reasons assigned by the trial Court while deciding issue No. 3 against the plaintiff cannot be accepted. The Trail Court has kept out of consideration large number of papers which clearly indicate that the vessel sailed on 02-05-1983 and capsized on 05-05-1983. Non consideration of the aforesaid large number of documentary evidence by the trail Court has vitiated the impugned Judgment with regard to issue No. 3.</p>

<p><strong><em>Sadaran Bima Corporation vs MA Halim </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>MARITIME CONVENTION ACT, 1911</strong></p>

<p><strong>S. 1: </strong>From the evidence it appears that &ldquo;M. L Jalamoni&rdquo; was plying with passengers within the permissible limit. It met with an accident at a time which was between 6-45 to 7 P.M. It is ture that as per licence&nbsp;&nbsp;&nbsp; &ldquo;M. L Jalamoni&rdquo; was prohibited from carrying on passenger service beyond 7 P.M. But accident took place before 7 P.M. Even violation of that restriction in the licence cannot make &ldquo;M. L Jalamoni&rdquo; responsible for contributory negligence. In this case the principle that a plaintiff who has voluntarily exposed himself to a known risk cannot recover the damages, is not applicable. This question is to be determined by application of section 1 of Maritime Convention Act, 1911.</p>

<p><strong><em>&nbsp;Owner M. L. Madina vs Owner Jalamoni </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>S. 8 : </strong>No action in the Admiralty Court will lie after lapse of two years from the date of damage or loss, etc. to any cargo. There is no reason to differ with the findings that &ldquo;the applicability of the Maritime Convention Act, 1911 in the Admiralty jurisdiction of the Court cannot be questioned in view of this Court&rsquo;s decision in M. L. Madina Vs M. L. Jalanoni, 30 DLR 149&rdquo;</p>

<p><strong><em>Bangladesh Inland Water Transport Corporation vs M/S. Seres Shipping lnc.</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>MERCHANT SHIPPING ACT, 1923</strong></p>

<p><strong>Secs. 63 and 64 :</strong> Sections 63 and 64 provide mode how dues of a seaman employed in a foreign ship to be recovered. &ndash; Hence provisions of Industrial Relation Ordinance are not applicable in the case of a seaman employed in&nbsp; a foreign ship.</p>

<p><strong><em>Mesers Malconssis Shipping Co. and another vs Chairman, Labour Court, Chittagong and others</em></strong></p>

<p>&nbsp;</p>

<p><strong>MERCHANT SHIPS REGISTRATION ORDINANCE, 1982</strong></p>

<p>No citizen of Bangladesh or any Bangladeshi Company shall acquire any ship without the permission of the Government. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Mahajak Shipping Co. Ltd. vs MV Sagar </em></strong></p>

<p><strong><em>&nbsp;</em></strong></p>

<p><strong>NOTARIES ORDINANCE,</strong> <strong>1961</strong></p>

<p><strong>Section 14-</strong> Whether exhibit 4 is admissible in evidence in view of section 14 of the Notaries Ordinance &ndash;No reciprocal arrangement between Bangladesh and India till 1980 asserted by the respondent&rsquo;s advocate- Whether there was any such reciprocal arrangement of material act between Bangladesh and India will have to be proved on evidence by the plaintiffs. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Bimal Kanti Biswas vs Custodian of Enemy Property </em></strong></p>

<p>&nbsp;</p>

<p><strong>Section 14- </strong>Under section 14 of the Notary Ordinance, 1961 notarial acts in a reciprocal country are recognized in Bangladesh when reciprocal arrangement exists.</p>

<p><strong><em>Additional Deputy Commissioner (Revenue) vs Serajuddin Ahmed and others </em></strong></p>

<p>&nbsp;</p>

<p><strong>ORIGINAL SIDE RULES</strong></p>

<p><strong>Chapter XVI rule 27- </strong>The plaintiff filed an application for permission to put in the requisite after condoning the delay for drawing up the decree in pursuance of the judgment and order passed in the Admiralty suit. On a perusal of the application and on consideration of the submission it brooks no controversy that the said application is founded on Rule 27 of the Original Side Rules as contained in Chapter XVI. But the Original Side Rules of the Calcutta High Court was framed under clause 37 of the Letters Patent, 1985 with the introduction of the Law Reforms Ordinance, 1978 the Letters Patent has been repealed by section 3 of the said Ordinance. On a scrutiny of the Law Reforms Ordinance, 1978, it is found that the Original Side Rules framed by the Calcutta High Court under Clause 37 of Letters Patent, 1865 have not been preserved by the Law Reforms Ordinance, 1978. Thus the Original Side Rules died its natural death with promulgation of the Law Reforms Ordinance, 1978. Therefore, there can be no manner of recourse to the Original Side Rules in any matter now.</p>

<p><strong><em>Bangladesh Inland Water Transport Corporation vs MV Helal Kamal and others</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>PILOTAGE ORDINANCE 1969</strong></p>

<p><strong>Section 3- </strong>The allegation of MV Shainpukur-1&rsquo;s negligence in plying the vessel was not established by the evidence of the kind whereupon placing reliance the Court would have been able to arrive at the finding that collision took place because of the negligence of the defendant No. 1&rsquo;s vessel MV Shainpukur-1. The plaintiff asserted that collision took place at 5.30 AM on 13-05-1986. On consideration of the evidence on record it appears that plaintiffs by credible evidence have failed to establish that collision took place at 5.30 AM. Since the evidence brought on record by the plaintiffs is not of the kind wherefrom it can definitely be arrived at the finding that because of the negligence of MV Shainpukur-1 accident took place, in that state of the matter the High Court Division was quite correct in holding that plaintiffs failed to establish that the accident took place because of the negligence of the vessel MV Shainpukur-1.</p>

<p><strong><em>Chalna Carriers and Fibers Ltd vs Shainpukur Navigation Ltd. </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>UNIFORM CUSTOMS AND PRACTICE TO DOCUMENTARY CREDIT</strong></p>

<p><strong>Articles 2, 3, 4, 9 &amp; 16- </strong>The consistent view of the courts are that only in two exceptional circumstances an issuing bank can absolve its responsibility of not honoring the obligation created by it under a letter of credit- Fraud of which it has knowledge and special circumstances which warrant an interference by the court.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Comforts Apparels (Pvt.) Ltd. vs Imperial Knitting Industries Ltd. and others</em></strong></p>

<p>&nbsp;</p>

<p><strong>WORDS AND PHRASES</strong></p>

<p>Cause of action &ndash; Plaintiff was employed salvor and there was no negligence on his part to discontinue the salvage work. So, no doubt could be entertained about the jurisdiction of the Admiralty Court to try the suit &ndash; Prayer for rejection of the plaint on the plea of want of cause of action is rejected. The Provision of Civil Procedure Code for rejection of the plaint have not been made applicable to Admiralty Court nor the Rules of Admiralty Court provided for rejection of the plaint. Rather it is by invocation of inherent power of the Admiralty Court it has to be returned. On facts and in law there is no case for rejection of the plaint in the instant case.</p>

<p><strong><em>Saleh Steel Industries Ltd. vs TSS Pacific Abeto and others &nbsp;&nbsp;&nbsp;</em></strong></p>

<p>&nbsp;</p>

<p>Observed &ldquo;the views expressed above seemed be correct and I am of the opinion that in the absence of express provision in the Code of Civil Procedure or Rules of the Admiralty Court it may exercise inherent Power to return the plaint if there is no cause of action triable by it or in the case it otherwise lacks its jurisdiction.&rdquo; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>South Asia Shipping Ltd vs MV Tony Best </em></strong></p>

<p>&nbsp;</p>

<p>Collision between two ships- Their liability when no ration of responsibility could be determined&nbsp; considering the materials on record it is concluded that both the vessels were careless and negligent which resulted in the collision. So applying the principle that if the negligence of one party is such as to cause the other party to make a negligent mistake that he would not otherwise have made, then both of them are equally responsible and liable. &nbsp;</p>

<p><strong><em>Sadharan Bima Corporation vs Philoship Co. </em></strong></p>

<p>&nbsp;</p>

<p>Arrest of ship there is nothing on record to show that the plaintiff controverted allegations of the owner of the vessel and then the application for attachment/arrest being belated is liable to be rejected.&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>&nbsp;Captain Md. Mobarak Hossain vs MT Dolores and others</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Admiralty Suit- </strong>It is for the seller or supplier of the bunkers either to get credit before he makes any supply or ensure that he will be paid from the time charterer or anybody else on his behalf.</p>

<p><strong><em>Marine Oil Broking Company Pte Ltd vs MV Daizu Maru and others </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Bill of Lading - </strong>Whether by the transaction by endorsement in a Bill of Lading the property in the goods passes or not may not be free from doubt but this much appears to be settled that an endorsee is at least entitled to the possession of the goods on the basis of a duly endorsed Bill of Lading.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Bangladesh and Abu Taleb vs Anis &amp; Co. and others</em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Bill of Lading</strong> &ndash; The Charter Party Agreement having not been incorporated or mentioned in the bill of lading, it will be unjust to saddle the consignee with any conditions thereof. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong><em>Samsun Shipping Corporation vs Hossain and Sons and others </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Charter- Party and bill of lading-</strong> Where the charter is also the shipper, the rights of ship power and charter as such will be governed by the charter-party alone. The bill of lading cannot vary or add to the terms of the charter-party unless it contains an express provision to that effect.<strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>

<p><strong><em>BCIC vs MV Kavo Alkyon </em></strong></p>

<p>&nbsp;</p>

<p>&ldquo;Lading in damaged condition&rdquo; &ndash; Had the landing in damaged condition been notified to plaintiff, it could apply for survey about damages which had thus been denied to it.</p>

<p><strong><em>Bangladesh Railway vs Messrs Chartering and Shipbreaking Corporation</em></strong></p>

<p>&nbsp;</p>

<p><strong>Marine Insurance- </strong>A contract of marine insurance is a contract of indemnity, i.e., the amount recoverable is measured by the extent of the assureds&rsquo; pecuniary loss. It is never a contract of guarantee of a contract of &ldquo;compensation for damages.&rdquo;</p>

<p><strong><em>Sadharan Bima Corporation vs Bengal Liner Ltd. and other </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p>It transpires from the documents on record that the cargo was never loaded onto the vessel in question and therefore, no maritime liability was occasioned.</p>

<p><strong><em>Global Traders vs MV GuijingVI and others&nbsp; </em></strong></p>

<p>&nbsp;</p>

<p>This Court finds no hindrance to accepting the view that the defendants are indeed, necessary and proper parties as contemplated under the provisions of the Code. This is because some relief consequent to the Letters of Guarantee is seen by this Court to lie against the defendant and the suits cannot, therefore, be completely decided and no effective decree consequentially made in their absence.</p>

<p><strong><em>United Edible Oils Ltd. vs London Steam Ship Owners&rsquo; Mutual Insurance Association Ltd. </em></strong></p>

<p><strong><em>&nbsp;</em></strong></p>

<p><strong>Appointment of Surveyor for Inspection- </strong>It appears that on an application at the instance of the plaintiff-decree-holder for appointment of an experienced surveyor having the knowledge of handling the containers, the same was allowed asking the decree-holder to deposit Taka 5000 immediately. The High Court Division on consideration of the application of the petitioner observed that it did not show at all why the petitioner is likely to be affected by any such order of the Court in appointing a surveyor for inspection of the condition of the containers in question and found that no injustice would be caused to the petitioner due to the impugned order.</p>

<p><strong><em>Shafi Motors Ltd. vs HRC Shipping Ltd. and other </em></strong></p>

<p>&nbsp;</p>

<p>Unless a suit is filed within one year after the delivery of the goods or the date when the goods should have been delivered, the carrier and the ship shall stand discharged from all liability in respect of loss or damage. Accordingly, the High Court Division held that the order of arrest dated 10-07-2007 in respect of vessel &lsquo;MV Lady Fatima&rsquo; and &lsquo;MV Dali&rsquo; was not sustainable in law.</p>

<p><strong><em>HRC Shipping Ltd. vs MV Lady Fatima </em></strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Indemnity Bond- </strong>If any connivance of manipulation of Indemnity Bond is found to have been made, the same can be brought within the mischief of criminal offence but the same cannot be made responsible to the others like guarantor or mortgagor as required in the loan agreement.</p>

<p><strong><em>Dong Sung Shipping Company Ltd. vs Janata Bank (Civil) </em></strong></p>

<p>&nbsp;</p>

<p><strong>Ullage Survey Report- </strong>In the event of conflict between 2 reports one by ullage survey report and the other by shore tank survey report the ullage survey report must prevail over the shore tank survey report.</p>

<p><strong><em>Novorossiysk Shipping Company USSR vs Lever Brothers Bangladesh Ltd. (Civil) </em></strong></p>

<p>&nbsp;</p>

<p><strong>Waiver- </strong>It is now a well settled principle that if any party by disregarding the arbitration Claus institutes a suit, the other party must raise objection before filing of the written statement, otherwise that would be deemed as an waiver of the condition.</p>

<p><strong><em>World Trade Shipping Corporation vs Sonat International Inc. (Civil)</em></strong></p>',
		       'publication_status' => 1,
		       'created_at' => new DateTime(),
		       'updated_at' => new DateTime()
		     ),
		     array(
		       'page_title' => 'International Legislations',
		       'short_description' => NULL,
		       'page_content' => '<p id="myTitle">INTERNATIONAL LEGISLATIONS APPLICABLE IN BANGLADESH:</p>
<p>Convention on the International Maritime Organization (IMO), 1948</p>

<p>Convention on Facilitation of International Maritime Traffic, 1965</p>

<p>International Convention on Load Lines, 1966</p>

<p>International Convention on Tonnage Measurement of Ships, 1969</p>

<p>International Convention relating to Intervention on the High Seas in cases of Oil Pollution Casualties, 1969</p>

<p>International Conference on Special Trade Passenger Ships Agreement (STP), 1971</p>

<p>Convention on the International Regulations for Preventing Collisions at Sea, 1972</p>

<p>Protocol on Space Requirements for Special Trade Passenger Ships, 1973</p>

<p>International Convention for the Prevention of Pollution from Ships, 1973; as modified by the protocol of 1978 relating thereto (MARPOL) 73/78) (Annex-I/II)</p>

<p>International Convention for the Prevention of Pollution from Ships, 1973, as modified by the Protocol of 1978 relating thereto (MARPOL) 73/78) (Annex-III)</p>

<p>International Convention for the Prevention of Pollution from Ships, 1973, as modified by the Protocol of 1978 relating thereto (MARPOL) 73/78) (Annex-IV)</p>

<p>International Convention for the Prevention of Pollution from Ships, 1973, as modified by the Protocol of 1978 relating thereto (MARPOL) 73/78) (Annex-V)</p>

<p>International Convention for the Prevention of Pollution from Ships, 1973, as modified by the Protocol of 1978 relating thereto (MARPOL) 73/78) (Annex-VI)</p>

<p>International Convention for the Safety of Life at Sea (SOLAS), 1974</p>

<p>Operating Agreement on the International Maritime Satellite Organization (INMARSAT), 1976</p>

<p>International Convention on Standards of Training, Certification and Watchkeeping for Seafarers, 1976 as amended 1995 (STCW/78) as amended 1995</p>

<p>Protocol of 1988 relating to the International Convention for the Safety of Life at Sea, 1988</p>

<p>Protocol of Load Lines 1988</p>

<p>Convention for the Suppression of Unlawful Acts Against the Safety of Maritime Navigation (SUA), 1988</p>

<p>1989 Amendments to the Convention and to the Operating Agreement on the International Maritime Satellite Organization (INMARSAT)</p>

<p>International Convention on Oil Pollution Preparedness, Response and Co-operation 1990 (ORPC&rdquo;90</p>

<p>Amendments to the Convention of the International Maritime Organization, 1981</p>

<p>Maritime Labour Convention 2006</p>',
		       'publication_status' => 1,
		       'created_at' => new DateTime(),
		       'updated_at' => new DateTime()
		     ),
		     array(
		       'page_title' => 'Useful Links',
		       'short_description' => NULL,
		       'page_content' => '<p id="myTitle">USEFUL WEBSITES:</p>
<div class="row">
<div class="col-sm-6">
<p><a href="http://www.mos.gov.bd/" target="_blank">P &amp; I Asia<br />
Ministry of Shipping</a></p>

<p><a href="http://www.moind.gov.bd/" target="_blank">Ministry of Industries </a></p>

<p><a href="http://www.mincom.gov.bd/" target="_blank">Ministry of Commerce</a></p>

<p><a href="http://www.mof.gov.bd/en/" target="_blank">Ministry of Finance and Planning</a></p>

<p><a href="http://www.moef.gov.bd/" target="_blank">Ministry of Environment and Forest</a></p>

<p><a href="http://www.doe.gov.bd/home/" target="_blank">Department Of Environment</a></p>

<p><a href="http://www.bcsir.gov.bd/" target="_blank">Bangladesh Council of Scientific and Industrial Research (BCSIR)</a></p>

<p><a href="http://dos.gov.bd/" target="_blank">Department of Shipping &amp; POMMD</a></p>

<p><a href="http://www.cpa.gov.bd/portal/" target="_blank">Chittagong Port Authority </a></p>

<p><a href="http://www.mpa.gov.bd/" target="_blank">Mongla Port Authority </a></p>

<p><a href="http://www.bsc.gov.bd/" target="_blank">Bangladesh Shipping Corporation</a></p>

<p><a href="http://www.gso.gov.bd/" target="_blank">Government Shipping Office </a></p>

<p><a href="http://www.biwta.gov.bd/website/" target="_blank">Bangladesh Inland Water Transport Authority (BIWTA)</a></p>

<p><a href="http://www.biwtc.gov.bd/" target="_blank">Bangladesh Inland Water Transport Corporation (BIWTC)</a></p>

<p><a href="http://macademy.gov.bd/portal/" target="_blank">Marine Academy of Bangladesh </a></p>

<p><a href="http://www.bsmrmu.edu.bd/" target="_blank">BSMR Maritime University</a></p>

<p><a href="http://www.caab.gov.bd/" target="_blank">Civil Aviation Authority of Bangladesh </a></p>

<p><a href="http://www.biman-airlines.com/" target="_blank">Biman Bangladesh Air Lines </a></p>

<p><a href="http://www.bsbk.gov.bd/" target="_blank">Land Port Authority</a></p>

<p><a href="http://www.bangladesh-bank.org/" target="_blank">Bangladesh Bank</a></p>

<p><a href="http://www.nbr-bd.org/" target="_blank">National Board of Revenue </a></p>

<p><a href="http://customs.gov.bd/index.jsf" target="_blank">Bangladesh Customs (ASYCUDA World)</a></p>

<p><a href="http://chc.gov.bd/imp/" target="_blank">Customs House, Chittagong</a></p>

<p><a href="http://www.nbr.gov.bd/field_office_page.php?id=22&amp;lan=eng" target="_blank">Customs House, Mongla</a></p>

<p><a href="http://www.epb.gov.bd/index.php/home/afterindex" target="_blank">Export Promotion Bureau </a></p>

<p><a href="http://www.railway.gov.bd/" target="_blank">Bangladesh Railway </a></p>

<p><a href="http://cnfctg.net/" target="_blank">Chittagong Customs clearing &amp; forwarding Agent Association </a></p>

<p><a href="http://www.baffa-bd.org/index.php" target="_blank">Bangladesh Freight Forwarders&#39; Association</a></p>

<p><a href="http://www.fbcci-bd.org/fbcci/" target="_blank">Federation of Bangladesh Chambers of Commerce and Industries (FBCCI)</a></p>

<p><a href="http://www.chittagongchamber.com/" target="_blank">Chittagong Chamber of Commerce and Industry </a></p>

<p><a href="http://www.dhakachamber.com/" target="_blank">Dhaka Chamber of Commerce and Industry</a>&nbsp;&nbsp;&nbsp;</p>

<p><a href="http://www.bsba.org.bd/" target="_blank">Bangladesh Ship Breakers&rsquo; Association</a></p>

<p><a href="http://www.bgmea.com.bd/" target="_blank">BGMEA</a></p>

<p><a href="http://www.bkmea.com/" target="_blank">BKMEA</a></p>

<p><a href="http://www.epzbangladesh.org.bd/" target="_blank">BEPZA</a></p>

<p><a href="http://www.pppo.gov.bd/" target="_blank">Public Private Partnership office</a></p>

<p>Ananda Shipyard and Slipways Ltd.</p>

<p>Western Marine Shipyard Ltd.</p>

<p><a href="http://w3.khulnashipyard.com/" target="_blank">Khulna Shipyard Ltd.</a></p>

<p><a href="http://www.tricomgroupbd.com/" target="_blank">Tricom Freight and Logistics Ltd</a></p>

<p><a href="http://www.aquamarinebd.com/" target="_blank">Aquamarine Bangladesh Ltd.</a></p>

<h5>INTERNATIONAL ORGANIZATIONS:</h5>

<p><a href="http://www.shippingandthelaw.org/">Shipping and the Law</a></p>

<p><a href="https://icc-ccs.org/icc/imb">ICC International Maritime Bureau</a></p>

<p><a href="http://www.worldshipping.org/">World Shipping Council</a></p>

<p><a href="http://www.ics-shipping.org/">International Chamber of Shipping</a></p>

<p><a href="http://www.containerownersassociation.org/">Container Owners Association</a></p>

<p><a href="http://www.intercargo.org/en/">International Association of Dry Cargo Shipowners</a></p>

<p><a href="http://www.iasa.net/">International Air &amp; Shipping Association</a></p>

<p><a href="http://www.ichca-australia.com/">International Cargo Handling Co-ordination Association</a></p>

<p><a href="http://www.bifa.org/">British International Freight Association</a></p>

<p><a href="http://www.icmaweb.com/">International Association of Maritime Arbitrators</a></p>

<p><a href="http://mlaanz.org/Home/0,271,1132,00.html">The Maritime Law Association of Australia &amp; New Zealand</a></p>

<p><a href="http://mlaus.org/">The Maritime Law Association of the US</a></p>

<p><a href="http://www.ibanet.org/Article/Detail.aspx?ArticleUid=c6546871-e1a5-444e-a69a-6dc90decd28c">IBA Maritime &amp; Transport Law Conference</a></p>

<p><a href="http://www.comitemaritime.org/Home/0,271,1132,00.html">Comite Maritime International</a></p>

<p><a href="http://www.internationallawseminar.com/">International Maritime Law Seminar</a></p>

<p><a href="http://www.mlasa.co.za/">Maritime Law Association of South Africa</a></p>

<p><a href="https://www.londoninternationalshippingweek.com/">London International Shipping Week</a></p>
</div>
<div class="col-sm-6">
<p><a href="http://www.wista.net/">Women&#39;s International Shipping &amp; Trading Association</a></p>

<p><a href="http://www.cmla.org/">The Canadian Maritime Law Association</a></p>

<p><a href="http://www.bmla.org.uk/">British Maritime Law Association</a></p>

<p><a href="http://www.iacs.org.uk/">International Association of Classification Societies</a></p>

<p><a href="http://www.nautinst.org/">The Nautical Institute</a></p>

<p><a href="http://www.iims.org.uk/">International Institute of Marine Surveying</a></p>

<p><a href="http://www.rina.org.uk/">Royal Institute of Naval Architects (RINA)</a></p>

<p><a href="http://www.marine-salvage.com/">The International Salvage Union</a></p>

<p><a href="http://www.imo.org/en/Pages/Default.aspx">International Maritime Organization</a></p>

<p><a href="http://www.iclg.co.uk">International Comparative Legal Guides</a></p>

<p><a href="http://www.igpandi.org/">Asian Shippers&#39; Council</a></p>

<p><a href="http://www.shipgsa.com/">Global Shippers&#39; Association</a></p>

<p><a href="http://www.snsc.org.sg/">Singapore National Shippers&#39; Council</a></p>

<p><a href="http://www.globalshippersforum.com/">Global Shippers&#39; Forum</a></p>

<p><a href="http://europeanshippers.eu/">European Shippers&#39; Council</a></p>

<p><a href="http://www.danishmaritimedays.com/">Danish Maritime Days</a></p>

<p><a href="http://mareforum.com/">Mare Forum</a></p>

<p><a href="http://www.virginia.edu/colp/annual-conference.html">Center for Oceans Law &amp; Policy</a></p>

<p><a href="http://www.allaboutshipping.co.uk/">All About Shipping</a></p>

<p><a href="http://www.hkmla.org/">Hong Kong Maritime Law Association</a></p>

<p><a href="http://www.oceanlaw.org/">Oceanlaw.org</a></p>

<p><a href="http://www.un.org/Depts/los/index.htm">Oceans &amp; Law of the Sea, UN</a></p>

<p><a href="http://www.mlas.org.sg/">Maritime Law Association of Singapore</a></p>

<p><a href="http://www.bdcham.sg/" target="_blank">Bd Business Chamber of Singapore</a></p>

<p><strong>P &amp; I CLUBS:</strong></p>

<p><a href="http://www.igpandi.org/" target="_blank">International Group of P &amp; I Clubs</a></p>

<p><a href="http://www.american-club.com/" target="_blank">American Club</a></p>

<p><a href="https://britanniapandi.com" target="_blank">Britannia P&amp;I</a></p>

<p><a href="https://britishmarine.com/" target="_blank">British Marine</a></p>

<p><a href="https://www.themecogroup.co.uk/charterers-liability-insurance/" target="_blank">Charterers P&amp;I Club</a></p>

<p><a href="http://www.cpiweb.org/cpiwebmanager/pages/index.jsp" target="_blank">China P&amp;I Club</a></p>

<p><a href="http://www.gard.no/" target="_blank">Gard</a></p>

<p><a href="https://hanseatic.com/" target="_blank">Hanseatic P&amp;I</a></p>

<p><a href="http://ceylonpaiclub.com/en/" target="_blank">Indian Ocean P&amp;I Club</a></p>

<p><a href="https://www.itic-insure.com/" target="_blank">ITIC Club</a></p>

<p><a href="https://www.piclub.or.jp/?lang=english" target="_blank">Japan P&amp;I Club</a></p>

<p><a href="http://www.kpiclub.or.kr/eng/" target="_blank">Korea P&amp;I Club</a></p>

<p><a href="https://www.londonpandi.com/" target="_blank">London P&amp;I Club</a></p>

<p><a href="http://www.lodestar-marine.com/" target="_blank">Lodestar Marine Insurance</a></p>

<p><a href="https://www.msamlin.com/en/index.html" target="_blank">M S Amlin (Raets Marine)</a></p>

<p><a href="https://www.nnpc.nl/" target="_blank">Noord (NNPC)</a></p>

<p><a href="http://www.nepia.com/" target="_blank">North</a></p>

<p><a href="https://www.norclub.com/" target="_blank">Norwegian Hull Club</a></p>

<p><a href="https://www.group.qbe.com/" target="_blank">QBE Insurance</a></p>

<p>Russian P&amp;I Club</p>

<p><a href="https://www.shipownersclub.com/" target="_blank">Shipowners&#39; Club</a></p>

<p><a href="https://www.skuld.com/" target="_blank">SKULD</a></p>

<p><a href="http://www.standard-club.com/" target="_blank">Standard Club</a></p>

<p><a href="https://www.steamshipmutual.com/" target="_blank">Steamship Mutual</a></p>

<p><a href="https://www.swedishclub.com/" target="_blank">Swedish Club</a></p>

<p><a href="https://www.thomasmillerspecialty.com/" target="_blank">Thomas Miller Specialty (Osprey Underwriting Agency)</a></p>

<p><a href="https://www.ttclub.com/" target="_blank">TT Club</a></p>

<p><a href="https://www.ukpandi.com/" target="_blank">UK P&amp;I Club</a></p>

<p><a href="https://www.westpandi.com/" target="_blank">West of England</a></p>
</div>
</div>',
		       'publication_status' => 1,
		       'created_at' => new DateTime(),
		       'updated_at' => new DateTime()
		     ),
		     array(
		       'page_title' => 'FAQs',
		       'short_description' => NULL,
		       'page_content' => '<p id="myTitle">Frequently asked questions and answers on olcbd are coming soon</p>',
		       'publication_status' => 1,
		       'created_at' => new DateTime(),
		       'updated_at' => new DateTime()
		     ),

		   ));
		} 
		else 
		{ 
			echo "\e[31mTable is not empty, therefore NOT "; 
		}

		// ============================= Downloads Table ============================
  //   	if(DB::table('downloads')->get()->count() == 0)
  //   	{
		// 	$downloads = DB::table('downloads')->insert(array(
		//      array(
		//        'title' => '',
		//        'content' => '',
		//        'publication_status' => '',
		//        'created_at' => new DateTime(),
		//        'updated_at' => new DateTime()
		//      ),

		//    ));
		// } 
		// else 
		// { 
		// 	echo "\e[31mTable is not empty, therefore NOT "; 
		// }

		// ============================= Emails Table ============================
  //   	if(DB::table('emails')->get()->count() == 0)
  //   	{
		// 	$emails = DB::table('emails')->insert(array(
		//      array(
		//        'name' => '',
		//        'email' => '',
		//        'service' => '',
		//        'attachment' => '',
		//        'message' => '',
		//        'created_at' => new DateTime(),
		//        'updated_at' => new DateTime()
		//      ),

		//    ));
		// } 
		// else 
		// { 
		// 	echo "\e[31mTable is not empty, therefore NOT "; 
		// }

    }
}
