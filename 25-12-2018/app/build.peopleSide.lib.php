<?php

function buildPeopleSide ($data){
    return '<div id="slide" class="col-3">
                        <ul>
                            <li>
                                <a href="">' . (isset($data['img'])?"<img src=" . $data['img'] . " >":'') . '</a>
                                <ul id="social">
                                    <li><i class="fab fa-facebook-f"></i></li>
                                    <li><i class="fab fa-twitter"></i></li>
                                    <li><i class="fab fa-google-plus-g"></i></li>
                                    <li><i class="fab fa-linkedin-in"></i></li>
                                </ul>
                            </li>
                        </ul>
                        <h5 class="text-center">' . (isset($data['name'])?$data['name'] :'') . '</h5>
                        <p class="text-center">' . (isset($data['slogan'])?$data['slogan']:'') . '</p>
                    </div>';

                    

} 

function buildPeopleSideAll (){
	$data [0]['img'] = "http://backend3.nikstep.com.ua/SpartUp/img/team1.png";
	$data [0]['name'] = "MD. KHALIL UDDIN";
	$data [0]['slogan'] = "Lead WordPress Developer";

	$data [1]['img'] = "http://backend3.nikstep.com.ua/SpartUp/img/team2.png";
	$data [1]['name'] = "RUBEL MIAH";
	$data [1]['slogan'] = "Lead WordPress Developer";

	$data [2]['img'] = "http://backend3.nikstep.com.ua/SpartUp/img/team3.png";
	$data [2]['name'] = "SHAMIM MIA";
	$data [2]['slogan'] = "Sr. Web Developer";

	$data [3]['img'] = "http://backend3.nikstep.com.ua/SpartUp/img/team4.png";
	$data [3]['name'] = "JOHN DOE";
	$data [3]['slogan'] = "Front-end Developer";

	$str = '<div id="slideBar" class="row">';

	for ($i=0; $i < 4 ; $i++) { 
		$str.= buildPeopleSide ($data[$i]);
	}
	$str.= '</div>';

	return $str;


}