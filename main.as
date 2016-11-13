package actions {
     
    /*
    always extend a class using movieclip instead of sprite when using flash.
    */
 
    import flash.display.MovieClip;
    import flash.events.*;
	import flash.media.*;
	import flash.system.fscommand;
     
    /*
    create our class
    */
     
    public class main extends MovieClip
	{
        private var snd1:bgSound = new bgSound();
		private var musicChannel:SoundChannel;
		//private var bar:MovieClip = new MovieClip();
		
        public function main ():void 
		{
			musicChannel = snd1.play();
        }
		
    }
}