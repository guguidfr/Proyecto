sudo apt update
sudo apt -y upgrade
sudo apt -y install neofetch
sudo apt install -y git
echo "vagrant:vagrant" | sudo chpasswd
#sudo git clone https://github.com/guguidfr/test.git
sudo sed -i 's/PasswordAuthentication no/PasswordAuthentication yes/g' /etc/ssh/sshd_config;
sudo systemctl restart sshd;
#sudo sh /home/vagrant/test/dns/dns-creation.sh