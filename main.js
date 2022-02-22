
     let digital = document.querySelector('.container');
     let hour = document.querySelector('.HOURS');
     const d = Name();
     const secondHand = document.querySelector('.second');
     const timezones = document.querySelector('#timezones');
     const minsHand = document.querySelector('.min');
     const hourHand = document.querySelector('.hour');
     const i = document.querySelector("i");
     let audio;
     let vol = false;
     let Default = "Africa/Nairobi";
     timezones.value = Default;
     var arr = Default;

    function Name() {
        const str = new Date().toLocaleString('en-US', { timeZone: arr });
        return new Date(str);
    }
    function analog () {
        const d = Name(); //object of date()
        let hr = d.getHours();
        let min = d.getMinutes();
        let sec = d.getSeconds();
        let newHr = hours(hr) ? (hr-12) : hr;
        let hr_rotation = 30 * hr + min / 2; //converting current time
        let min_rotation = 6 * min;
        let sec_rotation = 6 * sec;

        let time = `${change(newHr)}:${change(min)}:${change(sec)}`;
        digital.innerHTML = hours(hr) ? time+=(" pm") : time+=(" am");
      
        hourHand.style.transform = `rotate(${hr_rotation}deg)`;
        minsHand.style.transform = `rotate(${min_rotation}deg)`;
        secondHand.style.transform = `rotate(${sec_rotation}deg)`;
        ticking();
    }
    setInterval(analog, 1000);

    
    function toggleIcon() {
        if (i.getAttribute('class')=="fas fa-volume-up") {
            i.setAttribute("class","fas fa-volume-mute");
            vol = false;

        }
        else{
            i.setAttribute("class","fas fa-volume-up");
            vol = true;
        }
    }


     function hours(num){
        if (num>=12) {
            return true;
        }
        else{
            return false;
        }
     }
     function ticking(){
         audio = new Audio("src/audio/clock.mp3");
         if (!vol) {
             audio.volume = 0;
         }
         else{
             audio.volume = 1;
         }
         audio.play();
        //  audio.loop;
         
     }

     function change(text){
        text = text < 10 ? `0${text}` : text;
        return text;
     }
     function changeTZ(){
        arr = timezones.value;
        analog();
     }
