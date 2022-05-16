#sudo apt update
#sudo apt -y upgrade
#sudo apt -y install neofetch
echo "vagrant:vagrant" | sudo chpasswd
sudo yum -y install firewalld
sudo systemctl start firewalld
sudo sed -i 's/PasswordAuthentication no/PasswordAuthentication yes/g' /etc/ssh/sshd_config;
sudo systemctl restart sshd;