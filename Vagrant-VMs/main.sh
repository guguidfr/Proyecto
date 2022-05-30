sudo apt update
sudo apt -y upgrade
sudo apt -y install neofetch
sudo apt install -y git
echo "vagrant:vagrant" | sudo chpasswd
git clone https://github.com/guguidfr/get-ansible-debian.git
sh ./get-ansible-debian/get-ansible.sh
sudo sed -i 's/PasswordAuthentication no/PasswordAuthentication yes/g' /etc/ssh/sshd_config;
sudo systemctl restart sshd;