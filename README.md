# PlayingTime
Raspberrypi &amp; Machine Learning

This is creative project of my company. We learn how to use rasbperry pi model 3 and what's machine learning. 
I try to made a self-driving car named RockBox but in version 1.0 it controllered by web app through raspberry pi 3 and just live stream video. Classification of traffic signs ( stop, turn left, turn right) in folder classify.

This livestream part:
  ```
  sudo apt-get update <br />
  sudo apt-get dist-upgrade <br />
  git clone https://github.com/silvanmelchior/RPi_Cam_Web_Interface.git <br />
  cd RPi_Cam_Web_Interface <br />
  ./install.sh
  ```
and then html folder will be created in /var/www, you need modify this folder by add such php files note that add code of index.php to html/index.php) and main.js to html/js
