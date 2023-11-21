<?php

namespace cyber\DetailsGen;

class DetailsGen
{

    private static array $emailProviders = ['gmail.com', 'yahoo.com', 'outlook.com'];



    private static array $firstNames = [
        'John', 'Jane', 'David', 'Emily', 'Michael', 'Sophia',
        'Christopher', 'Olivia', 'Matthew', 'Emma', 'Jessica', 'Daniel',
        'Patricia', 'Andrew', 'Jessica', 'James', 'Ashley', 'Joseph',
        'Jennifer', 'Ryan', 'Sarah', 'Brian', 'Elizabeth', 'William',
        'Linda', 'Jonathan', 'Megan', 'Nicholas', 'Amanda', 'Anthony',
        'Dorothy', 'Christopher', 'Lauren', 'Kevin', 'Stephanie', 'Eric',
        'Betty', 'Brandon', 'Kimberly', 'Gary', 'Emily', 'Jacob',
        'Deborah', 'Tyler', 'Samantha', 'Richard', 'Alyssa', 'Charles',
        'Doris', 'Hannah', 'Jose', 'Grace', 'Donald', 'Nancy',
        'Matthew', 'Madison', 'George', 'Taylor', 'Kenneth', 'Brianna',
        'Edward', 'Kayla', 'Paul', 'Lily', 'Frank', 'Hailey',
        'Larry', 'Kaitlyn', 'Raymond', 'Alexis', 'Joshua', 'Victoria',
        'Jerry', 'Oliver', 'Kenneth', 'Aiden', 'Samuel', 'Chloe',
        'Jeffrey', 'Nathan', 'Douglas', 'Allison', 'Timothy', 'Sofia',
        'Walter', 'Ella', 'Patrick', 'Brooklyn', 'Peter', 'Lillian',
        'Harold', 'Grace', 'Douglas', 'Scarlett', 'Henry', 'Aria',
        'Carl', 'Evelyn', 'Arthur', 'Natalie', 'Ryan', 'Zoey',
    ];
    private static array $lastNames = [
        'Smith', 'Johnson', 'Williams', 'Brown', 'Jones', 'Miller',
        'Davis', 'García', 'Rodríguez', 'Martínez', 'Hernández', 'López',
        'González', 'Pérez', 'Wilson', 'Anderson', 'Thomas', 'Taylor',
        'Moore', 'Jackson', 'White', 'Harris', 'Martin', 'Thompson',
        'Garcia', 'Martinez', 'Robinson', 'Clark', 'Rodriguez', 'Lewis',
        'Lee', 'Walker', 'Hall', 'Allen', 'Young', 'King',
        'Wright', 'Hill', 'Scott', 'Green', 'Adams', 'Baker',
        'Nelson', 'Carter', 'Mitchell', 'Perez', 'Roberts', 'Turner',
        'Phillips', 'Campbell', 'Parker', 'Evans', 'Edwards', 'Collins',
        'Stewart', 'Sanchez', 'Morris', 'Rogers', 'Reed', 'Cook',
        'Morgan', 'Bell', 'Murphy', 'Bailey', 'Rivera', 'Cooper',
        'Richardson', 'Cox', 'Howard', 'Ward', 'Torres', 'Peterson',
        'Gray', 'Ramirez', 'James', 'Watson', 'Brooks', 'Kelly',
        'Sanders', 'Price', 'Bennett', 'Wood', 'Barnes', 'Ross',
        'Henderson', 'Coleman', 'Jenkins', 'Perry', 'Powell', 'Long',
        'Patterson', 'Hughes', 'Flores', 'Washington', 'Butler', 'Simmons',
    ];
    private static array $yorubaNames = ['Aanuoluwakiishi',
        'Abifoluwa',
        'Abimbola',
        'Abisola',
        'Abosede',
        'Adebimpe',
        'Adebisi',
        'Adebola',
        'Adedayo',
        'Adelola',
        'Ademuyiwa',
        'Adepeju',
        'Aderonke',
        'Adesanya',
        'Adesewa',
        'Adesola',
        'Adetoke',
        'Adetola',
        'Adetutu',
        'Adewemimo',
        'Adewunmi',
        'Adunni',
        'Aduragbemi',
        'Akin',
        'Akintoye',
        'Anjolaifeoluwa',
        'Anrolaoluwayo',
        'Anuoluwabamise',
        'Anuoluwadamisi',
        'Anuoluwakiishi',
        'Anuoluwapo',
        'Araoluwa',
        'Araoluwanimi',
        'Atinuke',
        'Atofarati',
        'Ayanfeoluwanimi',
        'Ayodapomope',
        'Ayokunumi',
        'Ayoola',
        'Ayooluwa',
        'Ayotola',
        'Ayotundun',
        'Ayowumi',
        'Boluwatife',
        'Digiola',
        'Ebunifewamiri',
        'Ereadura',
        'Eriadurami',
        'Eriayomi',
        'Eriifeoluwasimi',
        'Erimipe',
        'Erinkansilemi',
        'Ewaoluwa',
        'Ewatomi',
        'Eyitayo',
        'Eyitomilayo',
        'Eyiwunmimitoluwasefunmi',
        'Fadekemi',
        'Fadesewa',
        'Fadesike',
        'Fadesope',
        'Folashade',
        ' Boluwatife',
        'Babasola',
        'Babatunji',
        'Banjoko',
        'Bankole',
        'Bayode',
        'Bayowa',
        'Babatunde', // Additional name starting with "B"
        'Bamidele',
        'Oluwaseun',
        'Olumide',
        'Omolara',
        'Oluwakemi',
        'Olabisi',
        'Oladipo',
        'Olasunkanmi',
        'Oluwatoyin',
        'Olufemi',
        'Oluwabunmi',
        'Olawale',
        'Olumuyiwa',
        'Olayinka',
        'Oluwafunmilayo',
        'Oladimeji',
        'Arowosaye'
    ];
    private static array $igboNames = ['Chijioke',
        'Ngozi',
        'Uchenna',
        'Chinonso',
        'Obinna',
        'Nneka',
        'Onyinyechi',
        'Ikenna',
        'Oluchi',
        'Chukwudi',
        'Chioma',
        'Emeka',
        'Adaeze',
        'Ogechi',
        'Chiemeka',
        'Nkemjika',
        'Ezinne',
        'Kosisochukwu',
        'Tochukwu',
        'Amara',
        'Kelechi',
        'Nnamdi',
        'Ogochukwu',
        'Chinwe',
        'Chibuzo',
        'Obioma',
        'Ugochukwu',
        'Ijeoma',
        'Ifunanya',
        'Chukwuemeka',
        'Olamide',
        'Chidera',
        'Chinyere',
        'Ifeanyi',
        'Chisom',
        'Nkemdilim',
        'Chuka',
        'Uchendu',
        'Ijeoma',
        'Obiajulu',
        'Obiora',
        'Nnedimma',
        'Ozichi',
        'Uchechukwu',
        'Amarachi',
        'Obumneme',
        'Chiagozie',
        'Ngozichukwuka',];

    private static $nigerianStates = ['Abia',
        'Adamawa',
        'Akwa Ibom',
        'Anambra',
        'Bauchi',
        'Bayelsa',
        'Benue',
        'Borno',
        'Cross River',
        'Delta',
        'Ebonyi',
        'Edo',
        'Ekiti',
        'Enugu',
        'Gombe',
        'Imo',
        'Jigawa',
        'Kaduna',
        'Kano',
        'Katsina',
        'Kebbi',
        'Kogi',
        'Kwara',
        'Lagos',
        'Nasarawa',
        'Niger',
        'Ogun',
        'Ondo',
        'Osun',
        'Oyo',
        'Plateau',
        'Rivers',
        'Sokoto',
        'Taraba',
        'Yobe',
        'Zamfara',
        'Federal Capital Territory (FCT)'];

static $ministries = array(
'Ministry of Agriculture',
'Ministry of Aviation',
'Ministry of Communications and Digital Economy',
'Ministry of Defence',
'Ministry of Education',
'Ministry of Environment',
'Ministry of Finance',
'Ministry of Foreign Affairs',
'Ministry of Health',
'Ministry of Industry, Trade and Investment',
'Ministry of Interior',
'Ministry of Justice',
'Ministry of Labour and Employment',
'Ministry of Mines and Steel Development',
'Ministry of Niger Delta Affairs',
'Ministry of Petroleum Resources',
'Ministry of Power',
'Ministry of Science and Technology',
'Ministry of Sports and Youth Development',
'Ministry of Tourism, Culture and National Orientation',
'Ministry of Transportation',
'Ministry of Water Resources',
'Ministry of Women Affairs',
'Ministry of Works and Housing'
);


static $citiesInNigeria = ['Aba',
'Abeokuta',
'Abomege',
'Ado-Ekiti',
'Agulu',
'Ajaokuta',
'Akure',
'Asaba',
'Awka',
'Bida',
'Birnin Kebbi',
'Buguma',
'Calabar',
'Damaturu',
'Daura',
'Dutse',
'Ede',
'Effon-Alaiye',
'Eket',
'Enugu',
'Esuk Oron',
'Ewohimi',
'Funtua',
'Gashua',
'Gboko',
'Gombe',
'Gusau',
'Ibafo',
'Idah',
'Ife',
'Igede-Ekiti',
'Ijebu-Ode',
'Ikare',
'Ikirun',
'Ikot Ekpene',
'Ikot-Abasi',
'Ikot-Ikpene',
'Ilawe-Ekiti',
'Ipoti',
'Jalingo',
'Jimeta',
'Jos',
'Kabba',
'Kisi',
'Kontagora',
'Lafia',
'Makurdi',
'Minna',
'Nsukka',
'Ode',
'Ogbomoso',
'Ogoja',
'Okene',
'Okigwi',
'Okrika',
'Onitsha',
'Orlu',
'Oron',
'Ota',
'Owerri',
'Owo',
'Oyan',
'Oyo',
'Ozubulu',
'Pankshin',
'Potiskum',
'Sapele',
'Sokoto',
'Suleja',
'Ugep',
'Ughelli',
'Umuahia',
'Uromi',
'Uyo',
'Wukari',
'Yenagoa',
'Yola',
'Zaria',
'Abakaliki',
'Abak',
'Agbor',
'Akwanga',
'Bama',
'Bonny',
'Brass',
'Eha Amufu',
'Ejigbo',
'Ikom',
'Ilaro',
'Iseyin'];


    static $universities = array(
'University of Lagos',
'Ahmadu Bello University',
'University of Ibadan',
'University of Nigeria, Nsukka',
'Obafemi Awolowo University',
'University of Benin',
'University of Ilorin',
'University of Port Harcourt',
'Federal University of Technology, Minna',
'University of Abuja',
'University of Jos',
'University of Calabar',
'University of Uyo',
'University of Maiduguri',
'University of Agriculture, Abeokuta',
'Bayero University Kano',
'Nnamdi Azikiwe University',
'Federal University of Technology, Akure',
'University of Agriculture, Makurdi',
'Ladoke Akintola University of Technology',
'Federal University, Oye-Ekiti',
'University of Jos',
'University of Ilorin',
'University of Ibadan',
'University of Lagos',
'Covenant University',
'University of Port Harcourt',
'University of Calabar',
'University of Uyo',
'University of Maiduguri',
'University of Agriculture, Abeokuta',
'Bayero University Kano',
'Nnamdi Azikiwe University',
'Federal University of Technology, Akure',
'University of Agriculture, Makurdi',
'Ladoke Akintola University of Technology',
'Federal University, Oye-Ekiti',
'University of Jos',
'University of Ilorin',
'University of Ibadan',
'University of Lagos',
'Covenant University',
'University of Port Harcourt',
'University of Calabar',
'University of Uyo',
'University of Maiduguri',
'University of Agriculture, Abeokuta',
'Bayero University Kano',
'Nnamdi Azikiwe University',
'Federal University of Technology, Akure',
'University of Agriculture, Makurdi',
'Ladoke Akintola University of Technology',
'Federal University, Oye-Ekiti'
);

static $polytechnics = array(
'Yaba College of Technology',
'Federal Polytechnic, Ilaro',
'Federal Polytechnic, Nekede',
'Auchi Polytechnic',
'Kaduna Polytechnic',
'Federal Polytechnic, Ado-Ekiti',
'Federal Polytechnic, Bauchi',
'Federal Polytechnic, Bida',
'Federal Polytechnic, Oko',
'Kwara State Polytechnic',
'Rufus Giwa Polytechnic',
'Moshood Abiola Polytechnic',
'Federal Polytechnic, Offa',
'Lagos State Polytechnic',
'Delta State Polytechnic, Ogwashi-Uku',
'Abia State Polytechnic',
'Kogi State Polytechnic',
'Osun State Polytechnic',
'Rivers State Polytechnic',
'Nasarawa State Polytechnic',
'Imo State Polytechnic',
'Plateau State Polytechnic',
'Benue State Polytechnic',
'Akwa Ibom State Polytechnic',
'Edo State Polytechnic',
'Ogun State Institute of Technology',
'Kano State Polytechnic',
'Enugu State Polytechnic',
'Ondo State Polytechnic',
'Adamawa State Polytechnic',
'Ekiti State University',
'Nuhu Bamalli Polytechnic',
'Federal Polytechnic, Idah',
'Katsina State Institute of Technology and Management',
'Niger State Polytechnic',
'Kebbi State Polytechnic',
'Yobe State Polytechnic',
'Cross River State Institute of Technology and Management',
'Taraba State Polytechnic',
'Ebonyi State College of Education, Ikwo',
'Sokoto State Polytechnic',
'Jigawa State Polytechnic',
'Kwara State College of Technology',
'Oyo State College of Agriculture and Technology',
'Osisatech College of Education, Enugu',
'Ogun State College of Health Technology',
'Kogi State College of Education',
'Delta State College of Health Technology',
'Ondo State College of Health Technology',
'Imo State College of Health Sciences and Technology'
);

    /**
     * Generates a random Nigerian state.
     *
     * @return string
     */
    public static function randomNigerianState(): string
    {
        return self::$nigerianStates[array_rand(self::$nigerianStates)];
    }

    /**
     * Generates a random city in Nigeria.
     *
     * @return string
     */
    public static function randomNigerianCity(): string
    {
        return self::$citiesInNigeria[array_rand(self::$citiesInNigeria)];
    }

    /**
     * Generates a random Nigerian university.
     *
     * @return string
     */
    public static function randomNigerianUniversity(): string
    {
        return self::$universities[array_rand(self::$universities)];
    }

    /**
     * Generates a random Nigerian polytechnic.
     *
     * @return string
     */
    public static function randomNigerianPolytechnics(): string
    {
        return self::$polytechnics[array_rand(self::$polytechnics)];
    }

    /**
     * Generates a random Nigerian ministry.
     *
     * @return string
     */
    public static function randomNigerianMinistry(): string
    {
        return self::$ministries[array_rand(self::$ministries)];
    }


    /**
     * Generates a random email address.
     *
     * @return string
     */
    public static function generateRandomEmail(): string
    {
        $randomLastNames = self::$lastNames[array_rand(self::$lastNames)];
        $randomLastName = $randomLastNames[array_rand($randomLastNames)];
        $randomFirstName = $randomLastName[array_rand($randomLastName)];

        $randomProvider = self::$emailProviders[array_rand(self::$emailProviders)];

        return strtolower($randomFirstName . '.' . $randomLastName . '@' . $randomProvider);
    }

    /**
     * Generates a random English full name.
     *
     * @return string
     */
    public static function EnglishFullName(): string
    {
        $randomFirstName = self::$firstNames[array_rand(self::$firstNames)];
        $randomLastName = self::$lastNames[array_rand(self::$lastNames)];

        return $randomFirstName . ' ' . $randomLastName;
    }

    /**
     * Generates a random Yoruba full name.
     *
     * @return string
     */
    public static function YorubaFullName(): string
    {
        $randomFirstName = self::$yorubaNames[array_rand(self::$yorubaNames)];
        $randomLastName = self::$yorubaNames[array_rand(self::$yorubaNames)];

        return $randomFirstName . ' ' . $randomLastName;
    }

    /**
     * Generates a random Yoruba full name with a middle name.
     *
     * @return string
     */
    public static function YorubaWithMiddleName(): string
    {
        $randomFirstName = self::$yorubaNames[array_rand(self::$yorubaNames)];
        $randmoMiddle = self::$yorubaNames[array_rand(self::$yorubaNames)];
        $randomLastName = self::$yorubaNames[array_rand(self::$yorubaNames)];

        return $randomFirstName . ' ' . $randomLastName . ' ' . $randmoMiddle;
    }

    /**
     * Generates a random Igbo full name.
     *
     * @return string
     */
    public static function IgboFullName(): string
    {
        $randomFirstName = self::$igboNames[array_rand(self::$igboNames)];
        $randomLastName = self::$igboNames[array_rand(self::$igboNames)];

        return $randomFirstName . ' ' . $randomLastName;
    }

    /**
     * Generates a random Igbo full name with a middle name.
     *
     * @return string
     */
    public static function IgboWithMiddleName(): string
    {
        $randomFirstName = self::$igboNames[array_rand(self::$igboNames)];
        $randomMiddle = self::$igboNames[array_rand(self::$igboNames)];
        $randomLastName = self::$igboNames[array_rand(self::$igboNames)];

        return $randomFirstName . ' ' . $randomLastName . ' ' . $randomMiddle;
    }

    /**
     * Generates a random English first name.
     *
     * @return string
     */
    public static function OneEnglishName(): string
    {
        return self::$firstNames[array_rand(self::$firstNames)];
    }

    /**
     * Generates a random Yoruba first name.
     *
     * @return string
     */
    public static function OneYorubaName(): string
    {
        return self::$yorubaNames[array_rand(self::$yorubaNames)];
    }

    /**
     * Generates a random Igbo first name.
     *
     * @return string
     */
    public static function OneIgboName(): string
    {
        return self::$igboNames[array_rand(self::$igboNames)];
    }

    /**
     * Generates a full name with a random middle name.
     *
     * @return string
     */
    public static function withMiddleName(): string
    {
        $randomFirstName = self::$firstNames[array_rand(self::$firstNames)];
        $randommiddlename = self::$lastNames[array_rand(self::$lastNames)];
        $randomLastName = self::$lastNames[array_rand(self::$lastNames)];

        return $randomFirstName . ' ' . $randommiddlename . ' ' . $randomLastName;
    }

    /**
     * Generates a random Nigerian phone number.
     *
     * @return string
     */
    public static function nigerianPhoneNumber(): string
    {
        $prefixes = ['080', '081', '090', '070', '071'];
        $randomPrefix = $prefixes[array_rand($prefixes)];
        $randomNumber = mt_rand(10000000, 99999999);

        return $randomPrefix . $randomNumber;
    }

    /**
     * Generates a random Nigerian bank name.
     *
     * @return string
     */
    public static function generateRandomBankName(): string
    {
        $banks = ['First Bank', 'GTBank', 'Zenith Bank', 'Access Bank', 'UBA', 'Stanbic IBTC', 'Fidelity Bank', 'Ecobank', 'Union Bank', 'Sterling Bank', 'FCMB', 'Wema Bank'];

        return $banks[array_rand($banks)];
    }

    /**
     * Generates a random bank account number.
     *
     * @return string
     */
    public static function generateRandomAccountNumber(): string
    {
        return str_pad(mt_rand(1, 9999999999), 10, '0', STR_PAD_LEFT);
    }

    /**
     * Generates a random National Identification Number (NIN).
     *
     * @return string
     */
    public static function NIN(): string
    {
        return (string)mt_rand(1000000000, 9999999999);
    }

    /**
     * Generates a random Bank Verification Number (BVN).
     *
     * @return string
     */
    public static function BVN(): string
    {
        return (string)mt_rand(1000000000, 9999999999);
    }




}
