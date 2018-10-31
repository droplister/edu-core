<?php

/**
 * Get State Name
 * 
 * @param  string  $input
 * @param  string  $format
 * @return mixed
 */
function getStateName($input, $format='name')
{
    if(! $input || empty($input)) {
        return false;
    }

    $states = [
        'AL' => 'Alabama',
        'AK' => 'Alaska',
        'AZ' => 'Arizona',
        'AR' => 'Arkansas',
        'CA' => 'California',
        'CO' => 'Colorado',
        'CT' => 'Connecticut',
        'DE' => 'Delaware',
        'DC' => 'Washington DC',
        'FL' => 'Florida',
        'GA' => 'Georgia',
        'HI' => 'Hawaii',
        'ID' => 'Idaho',
        'IL' => 'Illinois',
        'IN' => 'Indiana',
        'IA' => 'Iowa',
        'KS' => 'Kansas',
        'KY' => 'Kentucky',
        'LA' => 'Louisiana',
        'ME' => 'Maine',
        'MD' => 'Maryland',
        'MA' => 'Massachusetts',
        'MI' => 'Michigan',
        'MN' => 'Minnesota',
        'MS' => 'Mississippi',
        'MO' => 'Missouri',
        'MT' => 'Montana',
        'NE' => 'Nebraska',
        'NV' => 'Nevada',
        'NH' => 'New Hampshire',
        'NJ' => 'New Jersey',
        'NM' => 'New Mexico',
        'NY' => 'New York',
        'NC' => 'North Carolina',
        'ND' => 'North Dakota',
        'OH' => 'Ohio',
        'OK' => 'Oklahoma',
        'OR' => 'Oregon',
        'PA' => 'Pennsylvania',
        'RI' => 'Rhode Island',
        'SC' => 'South Carolina',
        'SD' => 'South Dakota',
        'TN' => 'Tennessee',
        'TX' => 'Texas',
        'UT' => 'Utah',
        'VT' => 'Vermont',
        'VA' => 'Virginia',
        'WA' => 'Washington',
        'WV' => 'West Virginia',
        'WI' => 'Wisconsin',
        'WY' => 'Wyoming',
    ];

    foreach( $states as $abbr => $name ) {
        if ( preg_match( "/\b($name)\b/", ucwords( strtolower( $input ) ), $match ) ) {
            if( 'abbr' === $format ) { 
                return $abbr;
            }else{
                return $name;
            }
        }
        elseif( preg_match("/\b($abbr)\b/", strtoupper( $input ), $match) ) {                    
            if( 'abbr' === $format ){ 
                return $abbr;
            }else{
                return $name;
            }
        } 
    }
    return false;
}

/**
 * Get School Address
 * 
 * @param  object  $data
 * @return string
 */
function getSchoolAddress($data)
{
    if($data->pl_add) {
        return "{$data->pl_add}, {$data->pl_cit}, {$data->pl_stabb} {$data->pl_zip}";
    } else {
        return "{$data->paddrs}, {$data->pcity}, {$data->pstabb} {$data->pzip}";
    }
}

/**
 * Get School Name
 * 
 * @param  string  $string
 * @return string
 */
function getSchoolName($string)
{
    $school_name = ucwords(strtolower($string));
    $school_name = implode('/', array_map('ucwords', explode('/', $school_name)));
    $school_name = implode('-', array_map('ucwords', explode('-', $school_name)));
    $school_name = implode('.', array_map('ucwords', explode('.', $school_name)));
    $school_name = str_replace('Camellia Baptist Wem', 'Camellia Baptist Weekday Education Ministry', $school_name);
    $school_name = str_replace('Gfbc Education Programs', 'GFBC Education Programs', $school_name);
    $school_name = str_replace('First Baptist Church-Pinson', 'First Baptist Church Pinson', $school_name);
    $school_name = str_replace('First Missionary Baptist Child Devt Ctr Academy', 'First Missionary Baptist Child Development Center & Academy', $school_name);
    $school_name = str_replace('Hope Academy Presbyterian Home', 'Presbyterian Home Hope Academy', $school_name);
    $school_name = str_replace('Sequel Tsi of Alabama', 'Sequel TSI of Alabama', $school_name);
    $school_name = str_replace('Uab Engel Therapeutic School and Day Treatment', 'UAB Engel Therapeutic School and Day Treatment', $school_name);
    $school_name = str_replace('St Michaels Assoc For Sp Ed', 'St. Michaels Association for Special Education', $school_name);
    $school_name = str_replace('The Aces-Tempe', 'The ACES - Tempe', $school_name);
    $school_name = str_replace('Adms-Auburn Discovery Montessori School', 'ADMS-Auburn Discovery Montessori School', $school_name);
    $school_name = str_replace('Applied Scholastics Academy- East Bay', 'Applied Scholastics Academy - East Bay', $school_name);
    $school_name = str_replace('  ', ' ', $school_name);
    $school_name = str_replace('    ', ' ', $school_name);
    $school_name = str_replace('       ', ' ', $school_name);
    $school_name = str_replace(' Of ', ' of ', $school_name);
    $school_name = str_replace(' For ', ' for ', $school_name);
    $school_name = str_replace(' At ', ' at ', $school_name);
    $school_name = str_replace(' Ii', ' II', $school_name);
    $school_name = str_replace(' The ', ' the ', $school_name);
    $school_name = str_replace('- The', '', $school_name);
    $school_name = str_replace(' - the', ' - The ', $school_name);
    $school_name = str_replace('- Llc', '', $school_name);
    $school_name = str_replace(' Llc', '', $school_name);
    $school_name = str_replace('- Inc.', '', $school_name);
    $school_name = str_replace('Nhs ', 'NHS ', $school_name);
    $school_name = str_replace('- Inc', '', $school_name);
    $school_name = str_replace(', Inc.', '', $school_name);
    $school_name = str_replace(', Inc', '', $school_name);
    $school_name = str_replace(' Inc', '', $school_name);
    $school_name = str_replace(', Ltd', '', $school_name);
    $school_name = str_replace(' Ltd', '', $school_name);
    $school_name = str_replace(' -- ', ' - ', $school_name);
    $school_name = str_replace('Science- Language- Arts Internationa', 'Science, Language & Arts International School', $school_name);
    $school_name = str_replace('Hanc -', 'Hebrew Academy of Nassau County -', $school_name);
    $school_name = str_replace('Arkansas Christian Ac', 'Arkansas Christian Academy', $school_name);
    $school_name = str_replace('Xxiii', 'XXIII', $school_name);
    $school_name = str_replace('Scottsdale Child Care & Learning Center -Kierland', 'Scottsdale Child Care & Learning Center - Kierland', $school_name);
    $school_name = str_replace('New Covenant Lutheran Church Children\'s Ministry C', 'New Covenant Lutheran Church Children\'s Ministry', $school_name);
    $school_name = str_replace('Sequel Tsi', 'Sequel TSI', $school_name);
    $school_name = str_replace('Greenfield', 'Greenfiels', $school_name);
    $school_name = str_replace(' Sda', ' SDA', $school_name);
    $school_name = str_replace(' Acad', ' Academy', $school_name);
    $school_name = str_replace(' Academyemy', ' Academy', $school_name);
    $school_name = str_replace(' Scho', ' School', $school_name);
    $school_name = str_replace(' Schoolol', ' School', $school_name);
    $school_name = str_replace(' Bvm ', ' BVM ', $school_name);
    $school_name = str_replace(' Ctr', ' Center', $school_name);
    $school_name = str_replace(' Cnty', ' County', $school_name);
    $school_name = str_replace('P T A C H', 'Ptach', $school_name);
    $school_name = str_replace(' Lrng', ' Learning', $school_name);
    $school_name = str_replace(' Rc ', ' RC ', $school_name);
    $school_name = str_replace('Agbu ', 'AGBU ', $school_name);
    $school_name = str_replace(' Schl', ' School', $school_name);
    $school_name = str_replace('Kdgn', 'Kindergarten', $school_name);
    $school_name = str_replace('Pk-', 'PK-', $school_name);
    $school_name = str_replace(' In ', ' in ', $school_name);
    $school_name = str_replace(' And ', ' and ', $school_name);
    $school_name = str_replace(' Umc ', ' UMC ', $school_name);
    $school_name = str_replace('St.matthias', 'St. Matthias', $school_name);
    $school_name = str_replace('Episcipol', 'Episcopal', $school_name);
    $school_name = str_replace('Cleburne County Christian School (sorry Missed Fir', 'Cleburne County Christian School', $school_name);
    $school_name = str_replace('St Jeanne De Lestonnac (sisters of Company Of', 'St Jeanne De Lestonnac', $school_name);
    $school_name = str_replace('Campbell Hall (episcopal)', 'Campbell Hall', $school_name);
    $school_name = str_replace('Grace Christian School (changed the Name 6/15)', 'Grace Christian School', $school_name);
    $school_name = str_replace('Yew Chung International School (sv)', 'Yew Chung International School', $school_name);
    $school_name = str_replace('Lighthouse Voc-Ed Center (site 3)', 'Lighthouse Voc-Ed Center', $school_name);
    $school_name = str_replace('Ursuline Academy (pk-12)', 'Ursuline Academy', $school_name);
    $school_name = str_replace('Achievement Center (the)', 'Achievement Center', $school_name);
    $school_name = str_replace('Crestwell School (crestwell Higher Learning)', 'Crestwell School', $school_name);
    $school_name = str_replace('Sophia Academy (1)', 'Sophia Academy', $school_name);
    $school_name = str_replace('School of Expressive Arts and Learning (seal)', 'School of Expressive Arts and Learning (SEAL)', $school_name);
    $school_name = str_replace('Abc Learning Centre, Inc. (dba Abc-Stewart School', 'ABC-Stewart School', $school_name);
    $school_name = str_replace('Garden City (high Plains Christi)', 'Garden City', $school_name);
    $school_name = str_replace('Ironwood (ntlp)', 'Ironwood (NTLP)', $school_name);
    $school_name = str_replace('Mt Aetna Adventist School (maas)', 'Mt Aetna Adventist School (MAAS)', $school_name);
    $school_name = str_replace('Aichhorn School (the)', 'Aichhorn School', $school_name);
    $school_name = str_replace('Congregation Machna Shalva (girls Dept.)', 'Congregation Machna Shalva', $school_name);
    $school_name = str_replace('Bridges Academy (the)', 'Bridges Academy', $school_name);
    $school_name = str_replace('Brookwood School (the)', 'Brookwood School', $school_name);
    $school_name = str_replace('Co-Op School (the)', 'Co-op School', $school_name);
    $school_name = str_replace('Ecole Internationale De New York (einy)', 'Ecole Internationale De New York (EINY)', $school_name);
    $school_name = str_replace('Manhattan Children\'s Center (the)', 'Manhattan Children\'s Center', $school_name);
    $school_name = str_replace('Quad Preparatory School (the)', 'Quad Preparatory School', $school_name);
    $school_name = str_replace('Queens Centers For Progress (ucp of Queens)', 'Queens Centers For Progress', $school_name);
    $school_name = str_replace('Smith School (the)', 'Smith School', $school_name);
    $school_name = str_replace('Spring Valley (east)', 'Spring Valley', $school_name);
    $school_name = str_replace('Discovery Corner (karmal Enterprises)', 'Discovery Corner', $school_name);
    $school_name = str_replace('Orchard Knob School (amish)', 'Orchard Knob School', $school_name);
    $school_name = str_replace('Shady Grove School (huey St)', 'Shady Grove School', $school_name);
    $school_name = str_replace('Westview Christian School (amish)', 'Westview Christian School', $school_name);
    $school_name = str_replace('West Bay Christian Academy (elementary)', 'West Bay Christian Academy', $school_name);
    $school_name = str_replace('Islamic Academy of San Antonio (iasa)', 'Islamic Academy of San Antonio (IASA)', $school_name);
    $school_name = str_replace('Marian High School (nti Career Institute)', 'Marian High School (NTI Career Institute)', $school_name);
    $school_name = str_replace('Montessori Childrens House and Montessori School (', 'Montessori Childrens House and Montessori School', $school_name);
    $school_name = str_replace('Montessori Schools of Central Texas(temple Campus)', 'Montessori Schools of Central Texas', $school_name);
    $school_name = str_replace('Rowland Hall-St Mark\'s (middle)', 'Rowland Hall-St Mark\'s', $school_name);
    $school_name = str_replace('Kaukauna Catholic School System (kcss)', 'Kaukauna Catholic School System (KCSS)', $school_name);
    $school_name = str_replace('Abc ', 'ABC ', $school_name);
    $school_name = str_replace('A B C ', 'ABC ', $school_name);
    $school_name = str_replace('Ccs Adolscent Treatment Center', 'CCS Adolscent Treatment Center', $school_name);
    $school_name = str_replace('Children \'r\' Us Child Development', 'Children "R" Us Child Development', $school_name);
    $school_name = str_replace('Children "r" Us Child Development', 'Children "R" Us Child Development', $school_name);
    $school_name = str_replace('California University Fce', 'California University FCE', $school_name);
    $school_name = str_replace('New Covenant Lutheran Church Children\'s Ministry C', 'New Covenant Lutheran Church Children\'s Ministry C', $school_name);
    $school_name = str_replace('Saguaro Hills Sda Christian Scho', 'Saguaro Hills SDA Christian School', $school_name);
    $school_name = str_replace('Fairmont Private Schools-Hac', 'Historic Anaheim Campus - Fairmont Private Schools', $school_name);
    $school_name = str_replace('Faith Christian Academy of the Cma', 'Faith Christian Academy of the CMA', $school_name);
    $school_name = str_replace('Bright Futures Academy- Victorville', 'Bright Futures Academy - Victorville', $school_name);
    $school_name = str_replace('Grace Christian Academy of Vvag', 'Grace Christian Academy of VVAG', $school_name);
    $school_name = str_replace('Icc Community School', 'ICC Community School', $school_name);
    $school_name = str_replace('Kids World School & Cornerstone Academy of La', 'Kids World School & Cornerstone Academy of LA', $school_name);
    $school_name = str_replace('Montessori Academy of Ed Inc- Dba Montessori Academy', 'Montessori Academy', $school_name);
    $school_name = str_replace('Dba Community Christian Schools', 'Community Christian Schools', $school_name);
    $school_name = str_replace('Charter Oak Education Dba Sterling East', 'Charter Oak Education', $school_name);
    $school_name = str_replace('Berry Tasheba/Dba Next2mom Learning Center Inc', 'Next2Mom Learning Center', $school_name);
    $school_name = str_replace('Dba Mount Dora Christian Academy', 'Mount Dora Christian Academy', $school_name);
    $school_name = str_replace('Hershorin Schiff Day Schools of Tomorrow Inc Dba G', 'Hershorin Schiff Day School', $school_name);
    $school_name = str_replace('Dba A Blessed Academy', 'A Blessed Academy', $school_name);
    $school_name = str_replace('Dba City Garden Waldorf School', 'City Garden Waldorf School', $school_name);
    $school_name = str_replace('2450 Childcare Inc Dba Happy Days Childc', 'Happy Days Childcare', $school_name);
    $school_name = str_replace('ABC Learning Centre (dba Abc-Stewart School', 'ABC-Stewart School', $school_name);
    $school_name = str_replace('St Luke\' S Episcopal Day School', 'St Luke\'s Episcopal Day School', $school_name);
    $school_name = str_replace('Archbishop O\' Hara High School', 'Archbishop O\'Hara High School', $school_name);
    $school_name = str_replace('Happy \'r\' Wee', 'Happy R Wee', $school_name);
    $school_name = str_replace('Anova Center for Education, Concord', 'Anova Center for Education Concord', $school_name);
    $school_name = str_replace('Scottsdale Child Care & Learning Center -Kierland', 'Scottsdale Child Care & Learning Center - Kierland', $school_name);
    $school_name = str_replace('Christian Elementary School-East Campus', 'Christian Elementary School - East Campus', $school_name);
    $school_name = str_replace('Dove Day School- Educational Programs', 'Dove Day School - Educational Programs', $school_name);
    $school_name = str_replace('Ghs Academy- Golden Hills School', 'GHS Academy- Golden Hills School', $school_name);
    $school_name = str_replace('Kindercare Learning Center- Foothill', 'Kindercare Learning Center - Foothill', $school_name);
    $school_name = str_replace('Pinecrest School-Thousand Oaks', 'Pinecrest School - Thousand Oaks', $school_name);
    $school_name = str_replace('Seneca Family of Agencie- Catalyst Academy', 'Seneca Family of Agencie - Catalyst Academy', $school_name);
    $school_name = str_replace('Victory Baptist Christian School - Vbcs', 'Victory Baptist Christian School - VBCS', $school_name);
    $school_name = str_replace('Cccd - Connecticut Center for Child Development', 'CCCD - Connecticut Center for Child Development', $school_name);
    $school_name = str_replace('Community Christian Learning Center , Corp - Winter', 'Community Christian Learning Center - Winter', $school_name);
    $school_name = str_replace('Crossroads School- Lakeland', 'Crossroads School - Lakeland', $school_name);
    $school_name = str_replace('Huntington Learning Center- Tampa', 'Huntington Learning Center - Tampa', $school_name);
    $school_name = str_replace('Jca - Michele Block Gan Yeladim Preschool & Kindergarten', 'JCA - Michele Block Gan Yeladim Preschool & Kindergarten', $school_name);
    $school_name = str_replace('The Arc Jacksonville Academy 2 - Oct', 'The Arc Jacksonville Academy 2', $school_name);
    $school_name = str_replace('Boise Montessori- Montessori Academy', 'Boise Montessori - Montessori Academy', $school_name);
    $school_name = str_replace('Ucp - Melvin J Larson Education Center', 'UCP - Melvin J Larson Education Center', $school_name);
    $school_name = str_replace('Dakota Memorial School- Bismarck', 'Dakota Memorial School - Bismarck', $school_name);
    $school_name = str_replace('North Jackson Amish School/Ben King, Chairman', 'North Jackson Amish School', $school_name);
    $school_name = str_replace('North Star Amish School/Benuel King, Chairman', 'North Star Amish School', $school_name);
    $school_name = str_replace('Perelman Jewish Day School-Foreman Center', 'Perelman Jewish Day School - Foreman Center', $school_name);
    $school_name = str_replace('Perelman Jewish Day School-Stern Center', 'Perelman Jewish Day School- Stern Center', $school_name);
    $school_name = str_replace('Almansor Academyem', 'Almansor Academy', $school_name);
    $school_name = str_replace('First Methodist School.', 'First Methodist School', $school_name);
    $school_name = str_replace('A Our St. James Ands John Catolic School', 'St. James and John Catholic Elementary School', $school_name);
    $school_name = str_replace('St John Paul II Catholic Academy.-Neponset Campus', 'St John Paul II Catholic Academy - Neponset Campus', $school_name);

    return $school_name;
}