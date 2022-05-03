sudo apt update
sudo apt -y upgrade
sudo apt install -y ufw
sudo apt install -y bind9 bind9utils bind9-doc dnsutils
sudo ufw allow bind9
sudo cat ./forward-zone.txt >> /etc/bind/named.conf.local
sudo cat ./reverse-zone.txt >> /etc/bind/named.conf.local
sudo mv /etc/bind/named.conf.options /etc/binf/named.conf.options.back
sudo touch /etc/bind/named.conf.options
sudo cat ./conf-options.txt >> /etc/bind/named.conf.options
sudo touch /etc/bind/forward.miproyecto.local
sudo touch /etc/bind/reverse.miproyecto.local
sudo cat ./forward-file.txt >> /etc/bind/forward.miproyecto.local
sudo cat ./reverse-file.txt >> /etc/bind/reverse.miproyecto.local
sudo systemctl restart bind9