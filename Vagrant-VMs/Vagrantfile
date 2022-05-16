Vagrant.configure("2") do |config|
  config.vm.define "dns" do |dns|
    dns.vm.box = "debian/bullseye64"
    dns.vm.hostname = "DebianDNS"
    dns.vm.network :public_network, ip: "192.168.1.150"
    dns.vm.provider :virtualbox do |v|
      v.customize ["modifyvm", :id, "--ioapic", "on"]
      v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
      v.customize ["modifyvm", :id, "--name", "VM-dns"]
      v.customize ["modifyvm", :id, "--memory", 2048]
      v.customize ["modifyvm", :id, "--cpus", 1]
    end
    dns.vm.provision "shell", path: "./dns.sh"
  end
  config.vm.define "grafana" do |grafana|
    grafana.vm.box = "debian/bullseye64"
    grafana.vm.hostname = "DebianGrafana"
    grafana.vm.network :public_network, ip: "192.168.1.151"
    grafana.vm.provider :virtualbox do |v|
      v.customize ["modifyvm", :id, "--ioapic", "on"]
      v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
      v.customize ["modifyvm", :id, "--name", "VM-grafana"]
      v.customize ["modifyvm", :id, "--memory", 2048]
      v.customize ["modifyvm", :id, "--cpus", 1]
    end
    grafana.vm.provision "shell", path: "./grafana.sh"
  end
  config.vm.define "postgres" do |postgres|
    postgres.vm.box = "centos/7"
    postgres.vm.hostname = "Centos7BBDD1"
    postgres.vm.box_url = "centos/7"
    postgres.vm.network :public_network, ip: "192.168.1.152"
    postgres.vm.provider :virtualbox do |v|
      v.customize ["modifyvm", :id, "--ioapic", "on"]
      v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
      v.customize ["modifyvm", :id, "--name", "VM-postgres"]
      v.customize ["modifyvm", :id, "--memory", 2048]
      v.customize ["modifyvm", :id, "--cpus", 1]
    end
    postgres.vm.provision "shell", path: "./psql.sh"
  end
  config.vm.define "wordpress" do |wordpress|
    wordpress.vm.box = "debian/bullseye64"
    wordpress.vm.hostname = "DebianWP"
    wordpress.vm.network :public_network, ip: "192.168.1.153"
    wordpress.vm.provider :virtualbox do |v|
      v.customize ["modifyvm", :id, "--ioapic", "on"]
      v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
      v.customize ["modifyvm", :id, "--name", "VM-wordpress"]
      v.customize ["modifyvm", :id, "--memory", 2048]
      v.customize ["modifyvm", :id, "--cpus", 1]
    end
    wordpress.vm.provision "shell", path: "./wp.sh"
  end
  config.vm.define "apache" do |apache|
    apache.vm.box = "debian/bullseye64"
    apache.vm.hostname = "DebianApache"
    apache.vm.network :public_network, ip: "192.168.1.154"
    apache.vm.provider :virtualbox do |v|
      v.customize ["modifyvm", :id, "--ioapic", "on"]
      v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
      v.customize ["modifyvm", :id, "--name", "VM-apache"]
      v.customize ["modifyvm", :id, "--memory", 2048]
      v.customize ["modifyvm", :id, "--cpus", 1]
    end
    apache.vm.provision "shell", path: "./apache.sh"
  end
end