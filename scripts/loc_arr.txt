<?php 
  /**
   * definitions of address of this organizations locations.
   * 
   * @var string[string=>string[]]
   */
  $loc_arr =
    array(
      "hous_mri" => array("MRI, Houston\\n",
              "3391 Westpark Drive\\n",
              "Houston, Texas 77005\\n",
              "Fax: 555-555-1212"),
      "hous_omri" => array("Open MRI Clinic, Houston\\n",
              "1201 Dairy Ashford St Suite 110\\n",
              "Houston, TX 77079\\n",
              "Fax: 555-555-1212"),
      "hous_rad" => array("Radiologist, Houston\\n",
              "8901 FM 1960 Bypass Road West\\n",
              "Humble, TX 77338\\n"),
      "hous_xray" => array("Xrays, Houston\\n",
              "444 Holderrieth Blvd Suite 1\\n",
              "Tomball, TX 77375\\n",
              "Fax: 555-555-1214"),
      "wood_mri" => array("MRI, The Woodlands\\n",
              "26218 Interstate 45\\n",
              "Spring, TX 77386\\n",
              "Fax: 555-555-1215")
    );
  
  toJSArray('loc_arr', $loc_arr);
?>