<!DOCTYPE html>
<html lang="ta">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>கிஸான் கல்யாணம்</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <!-- நவிகேஷன் பட்டியல் -->
    <header>
        <nav>
            <ul>
                <li><a href="#cold-storage">கோல்ட் ஸ்டோரேஜ்</a></li>
                <li><a href="#tractor-rental">டிராக்டர் வாடகைக்கு எடுக்கவும்</a></li>
                <li><a href="#pesticide">கீடநாசினிகள் வாங்கவும்</a></li>
                <li><a href="#weather">காலநிலை முன்னறிவிப்பு</a></li>
                <li><a href="#pest-alerts">கீடு எச்சரிக்கைகள்</a></li>
                <li><a href="#farming-techniques">விவசாய தொழில்நுட்பங்கள்</a></li>
                <li><a href="#chatbot">சாட்‌பாட்</a></li>
            </ul>
        </nav>
    </header>

    <!-- ஹீரோ பகுதி -->
    <section class="hero">
        <h1>கிஸான் கல்யாணத்தில் உங்களை வரவேற்கிறோம்</h1>
        <p>விவசாயிகளின் அனைத்து தேவைகளுக்கும் ஒரே இடம்: கோல்ட் ஸ்டோரேஜ், டிராக்டர் வாடகை, கீடநாசினிகள், காலநிலை புதுப்பிப்புகள் மற்றும் மேலும்!</p>
    </section>

    <!-- கோல்ட் ஸ்டோரேஜ் பகுதி -->
    <section id="cold-storage">
        <h2>உங்கள் அருகிலுள்ள கோல்ட் ஸ்டோரேஜ்</h2>
        <p>உங்கள் பயிர்களை பாதுகாக்க அருகிலுள்ள கோல்ட் ஸ்டோரேஜ் வசதிகளை கண்டறியவும்.</p>
        <div id="cold-storage-map">
            <a href="coldstorage.html"><p> இங்கே கிளிக் செய்யவும்</p></a>
        </div>
    </section>

    <!-- டிராக்டர் வாடகை பகுதி -->
    <section id="tractor-rental">
        <h2>டிராக்டர் வாடகைக்கு எடுக்கவும்</h2>
        <p>உங்கள் தேவைகளுக்கு ஏற்ப டிராக்டரை தேர்ந்தெடுக்கவும்.</p>
        <form action="#">
            <label for="tractor-type">டிராக்டர் வகையை தேர்ந்தெடுக்கவும்:</label>
            <select id="tractor-type">
                <option value="small">டிராக்டர் வகையை தேர்ந்தெடுக்கவும்</option>
                <option value="small">சிறிய டிராக்டர்</option>
                <option value="medium">மத்திய டிராக்டர்</option>
                <option value="large">மிகப்பெரிய டிராக்டர்</option>
            </select>
            <br>
            <label for="rental-duration">வாடகை காலம்:</label>
            <input type="number" id="rental-duration" min="1" placeholder="நாட்கள்">
            <br>
            <button type="submit">டிராக்டரை பதிவு செய்யவும்</button>
        </form>
    </section>

    <!-- கீடநாசினிகள் வாங்கும் பகுதி -->
    <section id="pesticide">
        <h2>கீடநாசினிகள் வாங்கவும்</h2>
        <p>உங்கள் பயிர்களுக்கு கீடநாசினிகளை ஆராயவும்:</p>
        <div>
            <h3>தயாரிப்பு பட்டியல்</h3>
            <ul>
                <a href="https://www.amazon.in/s?k=Insecticide+A&crid=WSICUXF2U89I&sprefix=insecticide+a%2Caps%2C216&ref=nb_sb_noss_2"><li>கீடநாசினி A</li></a>
                <a href="https://www.amazon.in/s?k=Fungicide+B&crid=1ID039SDTKUA1&sprefix=fungicide+b%2Caps%2C197&ref=nb_sb_noss_2"><li>பங்கிசைடு B</li></a>
                <a href="https://www.amazon.in/s?k=Herbicide+C&crid=3AKO2G0SK9GGI&sprefix=herbicide+c%2Caps%2C195&ref=nb_sb_noss_2"><li>ஹெர்பிசைடு C</li></a>
                <li>மேலும் பல: கீழே உள்ள பொத்தானை அழுத்தவும்</li>
            </ul>
            <a href="https://www.amazon.in/?&tag=googhydrabk1-21&ref=pd_sl_5szpgfto9i_e&adgrpid=155259813593&hvpone=&hvptwo=&hvadid=674893540034&hvpos=&hvnetw=g&hvrand=7633956169893688526&hvqmt=e&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9209673&hvtargid=kwd-64107830&hydadcr=14452_2316413&gad_source=1"><button>மேலும் (எதுவும்)</button></a>
        </div>
    </section>

    <!-- காலநிலை முன்னறிவிப்பு பகுதி -->
    <section id="weather">
        <h2>காலநிலை முன்னறிவிப்பு</h2>
        <p>உங்கள் பகுதியில் நேரடி காலநிலை முன்னறிவிப்புகளுடன் புதுப்பிக்கவும்.</p>
        <div id="weather-info">
            <a href="weather.html"><p>காலநிலை தரவுகள் ஒருங்கிணைப்பு இங்கே.</p></a>
        </div>
    </section>

    <!-- கீடு எச்சரிக்கைகள் பகுதி -->
    <section id="pest-alerts">
        <h2>கீடு எச்சரிக்கைகள்</h2>
        <h2>பணி நினைவூட்டல்</h2>
        <div>
            <input type="text" id="task" placeholder="உங்கள் பணியை உள்ளிடவும்">
            <input type="datetime-local" id="time">
            <button onclick="setReminder()">எச்சரிக்கையை அமைக்கவும்</button>
        </div>
    
        <audio id="alarmSound" src="https://actions.google.com/sounds/v1/alarms/alarm_clock.ogg" preload="auto"></audio>
    
        <script>
            function setReminder() {
                const taskInput = document.getElementById('task').value;
                const timeInput = document.getElementById('time').value;
                const alarmSound = document.getElementById('alarmSound');
    
                if (!taskInput || !timeInput) {
                    alert('தயவுசெய்து பணியின் விவரங்களையும், நேரத்தையும் உள்ளிடவும்.');
                    return;
                }
    
                const taskTime = new Date(timeInput).getTime();
                const currentTime = new Date().getTime();
                const timeDifference = taskTime - currentTime;
    
                if (timeDifference <= 0) {
                    alert('தயவுசெய்து எதிர்கால நேரத்தை உள்ளிடவும்.');
                    return;
                }
    
                setTimeout(() => {
                    alarmSound.play();
                    alert(`தொடங்க வேண்டிய நேரம்: ${taskInput}`);
                }, timeDifference);
            }
        </script>
    </section>

    <!-- அறிவியல் விவசாய தொழில்நுட்பங்கள் பகுதி -->
    <section id="farming-techniques">
        <h2>அறிவியல் விவசாய தொழில்நுட்பங்கள்</h2>
        <p>சமீபத்திய விவசாய தொழில்நுட்பங்கள் மற்றும் சிறந்த நடைமுறைகள் பற்றி அறியவும்.</p>
        <ul>
            <li>பயிர் மாறுதல்
                இது விவசாய நடைமுறை ஆகும், இதில் வெவ்வேறு வகையான பயிர்களை ஒரே பகுதியிலே வெவ்வேறு பருவங்களில் அல்லது ஆண்டுகளில் வளர்க்கின்றனர். இந்த முறைக்கு பல நன்மைகள் உள்ளன, உதாரணமாக, நைட்ரஜன்-ஃபிக்சிங் பயிர்கள், உதாரணமாக, பருத்தி, ஊட்டச்சத்து தேவைப்படும் பயிர்களை, உதாரணமாக, தானியங்களை மாற்றுவதன் மூலம் மண்ணின் உரம் மேம்படுத்தப்படுகிறது. இது பூச்சிகள் மற்றும் நோய்களை கட்டுப்படுத்த உதவுகிறது, ஏனெனில் இது பயிர்-சிறப்பு பூச்சிகள் மற்றும் நோயாளிகளின் வாழ்க்கைச் சுற்றத்தை தடுக்கும், இதனால் இரசாயன பூச்சிக்கொல்லிகள் தேவை குறைகிறது. பயிர் மாறுதல் மண்ணின் அமைப்பை மேம்படுத்துகிறது மற்றும் மண்ணின் கீறலுக்கு தடையாக இருக்கிறது. மேலும், வெவ்வேறு பயிர்களை வளர்ப்பதால் வெவ்வேறு போட்டி திறன்கள் உள்ளதால், இது கீரை மேலாண்மையில் மேம்பாட்டை ஏற்படுத்துகிறது. இருப்பினும், பயிர் மாறுதலுக்கு சில குறைகள் உள்ளன. இது பயிர்களின் தேவைகள் மற்றும் மண்ணின் நிலைகள் பற்றிய கவனமாக திட்டமிடல் மற்றும் அறிவு தேவை, இது நேரம் செலவிடும் மற்றும் சிக்கலானதாக இருக்கலாம். பயிர் மாறுதலுக்கு மாற்றம் செய்யும் விவசாயிகளுக்கு சவால்களை எதிர்கொள்ள வேண்டியிருக்கும், மேலும் சரியாக நிர்வகிக்காதால், பயிர்களின் உற்பத்தியில் மாற்றங்கள் ஏற்படலாம். மேலும், பயிர் மாறுதலுக்கு வெவ்வேறு பயிர்களின் விதைகள் மற்றும் உள்ளீடுகளில் கூடுதல் உழைப்பு மற்றும் முதலீடு தேவைப்படும். இந்த சவால்களுக்கு அப்பால், பயிர் மாறுதலின் நீண்டகால நன்மைகள், உதாரணமாக, மண்ணின் ஆரோக்கியத்தில் மேம்பாடு, உயிரியல் பலவகைமையில் அதிகரிப்பு, மற்றும் சுற்றுச்சூழலுக்கு ஏற்படும் தாக்கத்தை குறைப்பது, இது நிலையான விவசாயத்தில் ஒரு மதிப்புமிக்க நடைமுறை ஆகிறது.
                கண்டிப்பாக! இங்கே பயிர் மாறுதலின் நன்மைகள் மற்றும் குறைகள் புள்ளி-வாரமாக வழங்கப்பட்டுள்ளன:
                <br>
                <br>
                 நன்மைகள்:
                <br>
                <br>
                1. மண்ணின் உரம் மேம்படுத்துதல்:
                - நைட்ரஜன்-ஃபிக்சிங் பயிர்களை, உதாரணமாக, பருத்தி, ஊட்டச்சத்து தேவைப்படும் பயிர்களை, உதாரணமாக, தானியங்களை மாற்றுவதன் மூலம் மண்ணின் ஊட்டச்சத்து நிலைகளை பராமரிக்க உதவுகிறது.
                <br>
                <br>
                2. பூச்சிகள் மற்றும் நோய்கள் மேலாண்மை:
                - பயிர்களை மாற்றுவதன் மூலம், பயிர்-சிறப்பு பூச்சிகள் மற்றும் நோயாளிகளின் வாழ்க்கைச் சுற்றத்தை தடுக்கும், இதனால் அவற்றின் எண்ணிக்கை குறைகிறது மற்றும் இரசாயன பூச்சிக்கொல்லிகள் தேவை குறைகிறது.
                <br>
                <br>
                3. மண்ணின் அமைப்பை மேம்படுத்துதல்:
                - வெவ்வேறு பயிர்களுக்கு வெவ்வேறு மூல அமைப்புகள் உள்ளன, இது மண்ணின் அமைப்பை மேம்படுத்துவதில் மற்றும் மண்ணின் கீறலுக்கு தடையாக இருக்க உதவுகிறது.
                <br>
                <br>
                4. கீரை மேலாண்மை:
                - வெவ்வேறு பயிர்களை வளர்ப்பதால் வெவ்வேறு போட்டி திறன்கள் உள்ளதால், இது கீரை எண்ணிக்கையை குறைக்க உதவுகிறது.
                <br>
                <br>
                5. உயிரியல் பலவகைமையில் அதிகரிப்பு:
                - பயிர் மாறுதல் உயிரியல் பலவகைமையை ஊக்குவிக்கிறது, இது சுற்றுச்சூழலின் நிலைத்தன்மை மற்றும் மண்ணின் ஆரோக்கியத்தை மேம்படுத்துகிறது.
                <br>
                <br>
                 குறைகள்:
                
                <br>
                <br>
                 1. சிக்கலான திட்டமிடல் மற்றும் மேலாண்மை:
                - பயிர்களின் தேவைகள் மற்றும் மண்ணின் நிலைகள் பற்றிய அறிவு தேவை, இது நேரம் செலவிடும் மற்றும் சிக்கலானதாக இருக்கலாம்.
                <br>
                <br>
                2. ஆரம்ப மாற்ற சவால்கள்:
                - ஒரே பயிர் முறைகளில் பழக்கமான விவசாயிகளுக்கு பயிர் மாறுதலுக்கு மாற்றம் செய்யும் போது சவால்களை எதிர்கொள்ள வேண்டியிருக்கும், இதில் உபகரணங்கள் மற்றும் விவசாய தொழில்நுட்பங்களில் மாற்றங்கள் அடங்கும்.
                <br>
                <br>
                3. உற்பத்தியில் மாற்றங்கள்:
                - பயிர் மாறுதலின் சரியான மேலாண்மை இல்லாதால், உற்பத்தியில் குறைவுகள் ஏற்படலாம்.
                <br>
                <br>
                4. உழைப்பு மற்றும் செலவுகள்:
                - பயிர் மாறுதலை நடைமுறைப்படுத்துவதற்கு கூடுதல் உழைப்பு மற்றும் வெவ்வேறு பயிர்களின் விதைகள் மற்றும் உள்ளீடுகளில் முதலீடு தேவைப்படும்.
                <br>
                <br>
                5. சந்தை தேவைகள்:
                - விவசாயிகளுக்கு மாற்றிய பயிர்களுக்கு சந்தை தேவைகளை கருத்தில் கொள்ள வேண்டும், இதனால் பொருளாதார நிலைத்தன்மை உறுதி செய்யப்படும்.
            </li>
            <li>மண்ணின் ஆரோக்கிய மேலாண்மை
                என்பது மண்ணின் மொத்த ஆரோக்கியம் மற்றும் உரத்தை பராமரிக்க அல்லது மேம்படுத்துவதற்கான நடைமுறைகள் மற்றும் உத்திகள் ஆகும். ஆரோக்கியமான மண் நிலையான விவசாயத்திற்கு மிகவும் முக்கியமானது, ஏனெனில் இது செடிகளின் வளர்ச்சியை ஆதரிக்கிறது, நீரின் நுழைவையும் சேமிப்பையும் மேம்படுத்துகிறது, மற்றும் பயனுள்ள நுண்ணுயிர்களின் பல்வேறு சூழல்களை ஊக்குவிக்கிறது. இங்கே மண்ணின் ஆரோக்கிய மேலாண்மையின் முக்கிய அம்சங்கள், நன்மைகள் மற்றும் குறைகள் உள்ளன:
                <br>
                <br>
                நன்மைகள்:
                <br>
                <br>
                1. மண்ணின் உரம் மேம்படுத்துதல்:
                - பயிர் மாறுதல் மற்றும் காரிகை திருத்தங்கள் போன்ற நடைமுறைகள் மண்ணின் ஊட்டச்சத்துகளை மீட்டெடுக்கவும், மண்ணின் அமைப்பை மேம்படுத்தவும் செயற்படுகின்றன.
                <br>
                <br>
                2. நீர் சேமிப்பு திறனை மேம்படுத்துதல்:
                - ஆரோக்கியமான மண் சிறந்த நீர் நுழைவையும் சேமிப்பையும் கொண்டுள்ளது, இது வறட்சியும் கீறலுக்கும் ஆபத்தை குறைக்கிறது.
                <br>
                <br>
                3. பூச்சிகள் மற்றும் நோய்கள் மேலாண்மை:
                - ஒருங்கிணைந்த பூச்சி மேலாண்மை மற்றும் பயிர் மாறுதல் இரசாயன பூச்சிக்கொல்லிகள் மீது சார்பு குறைக்கிறது.
                <br>
                <br>
                4. உயிரியல் பலவகைமையில் அதிகரிப்பு:
                - பல்வேறு பயிர் முறைமைகள் மற்றும் குறைந்த இரசாயன உள்ளீடுகள் மண்ணில் உயிரினங்களின் வளமான சூழல்களை ஊக்குவிக்கின்றன.
                <br>
                <br>
                5. நிலையான விவசாயம்:
                - மண்ணின் ஆரோக்கிய மேலாண்மை நடைமுறைகள் விவசாய முறைமைகளின் நீண்டகால நிலைத்தன்மை மற்றும் நிலைத்தன்மையை ஊக்குவிக்கின்றன.
                <br>
                <br>
                குறைகள்:
                <br>
                <br>
                1. உழைப்பு-கணக்கீடு:
                - மண்ணின் ஆரோக்கிய மேலாண்மை நடைமுறைகளை நடைமுறைப்படுத்துவது உழைப்பு-கணக்கீடு ஆகும் மற்றும் கூடுதல் நேரம் மற்றும் முயற்சியை தேவைப்படுத்தலாம்.
                <br>
                <br>
                2. ஆரம்ப செலவுகள்:
                - நிலையான நடைமுறைகளுக்கு மாறுவதற்கு புதிய உபகரணங்கள், காரிகை உள்ளீடுகள் மற்றும் மண் சோதனைக்கு ஆரம்ப செலவுகள் ஏற்படலாம்.
                <br>
                <br>
                3. அறிவு மற்றும் திறன்கள்:
                - வெற்றிகரமான மண்ணின் ஆரோக்கிய மேலாண்மைக்கு மண் அறிவியல், பயிர்களின் தேவைகள் மற்றும் நிலையான நடைமுறைகள் பற்றிய அறிவு தேவை, இது சிக்கலானதாக இருக்கலாம்.
                <br>
                <br>
                4. தற்காலிக உற்பத்தி குறைவு:
                - சில நடைமுறைகள், குறைந்த உழைப்பு போன்றவை, மண் ஆரோக்கியம் மேம்படும் வரை தற்காலிக உற்பத்தி குறைவுகளை ஏற்படுத்தலாம்.
                <br>
                <br>
                5. சந்தை வரம்புகள்:
                - விவசாயிகளுக்கு பொருளாதார நிலைத்தன்மையை உறுதி செய்ய நிலையான நடைமுறைகளைப் பயன்படுத்தி வளர்க்கப்பட்ட பயிர்களுக்கு சந்தை தேவைகளை கருத்தில் கொள்ள வேண்டும்.
            </li>
        </ul>
    </section>

    <!-- சாட்‌பாட் பகுதி -->
    <section id="chatbot">
        <h2>எங்களுடன் பேசுங்கள்</h2>
        <div id="chatbot-box">
            <p>விவசாயம் பற்றி என்னை எதையும் கேளுங்கள்!</p>
            <input type="text" id="chat-input" placeholder="உங்கள் கேள்வியை டைப் செய்யவும்...">
            <button onclick="startChat()">அனுப்பவும்</button>
            <div id="chat-response"></div>
        </div>
    </section>

    <footer>
        <p>கிஸான் ஆதரவு வலைத்தளம் &copy; 2025</p>
    </footer>

    <!-- ஜாவாஸ்கிரிப்ட் -->
    <script>
        function sendAlert() {
            alert('கீடு எச்சரிக்கை: காலநிலை மற்றும் கீடு தரவின் அடிப்படையில் கீடநாசினி பயன்படுத்தும் நேரம்!');
        }

        function startChat() {
            const userQuestion = document.getElementById('chat-input').value;
            const responseDiv = document.getElementById('chat-response');
            if (userQuestion) {
                responseDiv.innerHTML = `நீங்கள் கேட்டது: "${userQuestion}"<br>சாட்‌பாட்டின் பதில்: "இது ஒரு சிறந்த கேள்வி! குறிப்பிட்ட ஆலோசனைகளுக்கு உள்ளூர் நிபுணரை அணுகவும்."`;
            } else {
                responseDiv.innerHTML = "தயவுசெய்து ஒரு கேள்வியை டைப் செய்யவும்.";
            }
        }
    </script>
</body>
</html>