sudo apt update
sudo apt -y upgrade
sudo apt -y install neofetch
sudo sed -i 's/PasswordAuthentication no/PasswordAuthentication yes/g' /etc/ssh/sshd_config;
sudo systemctl restart sshd;