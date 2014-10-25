# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "ubuntu/trusty64"
  config.vm.host_name = "test.localhost"
  config.vm.network "private_network", ip: "192.168.66.68"

  config.vm.synced_folder "web", "/var/www/test", type: "nfs"
  config.vm.synced_folder "../phpqatools", "/var/www/php", type: "nfs"

  config.vm.provider "virtualbox" do |v|
    v.name = "test"
    v.memory = 1024
  end

  config.vm.provision :ansible do |a|
       a.playbook = "playbook.yml"
       a.inventory_path = "hosts"
       a.limit = "all"
  end
end