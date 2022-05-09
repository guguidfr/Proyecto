sudo apt update
sudo apt -y upgrade
sudo apt -y install neofetch
echo "vagrant:vagrant" | sudo chpasswd
sudo sed -i 's/PasswordAuthentication no/PasswordAuthentication yes/g' /etc/ssh/sshd_config;
sudo systemctl restart sshd;
sudo apt -y install apache2 apache2-utils