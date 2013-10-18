load 'deploy' if respond_to?(:namespace) # cap2 differentiator


set :application,     "collecta"
set :branch,          "master"
set :remote,          "live"
set :release_path,    "./site"


role :web,            "#{application}.co.uk"
set :user,            "#{application}"

ssh_options[:forward_agent] = true
default_run_options[:pty] = true


before "deploy:update_code" do run "rm -rf #{release_path}/public/build" end
after "deploy:update_code", "composer:install"



namespace :deploy do
  task :start do ; end
  task :stop do ; end
  task :restart do ; end
  task :update_code do
    run_locally "grunt default"
    puts "Pushing #{branch} code to #{remote} git repository ..."
    system "git push #{remote} #{branch}"
    abort unless $?.success?
    top.upload "./public/build", "#{release_path}/public/", :via => :scp, :recursive=>true, :mkdir => true
  end
  task :symlink do ; end #don't create the current symlink to the last release
  task :create_symlink do ; end
 end



namespace :composer do
 
  task :install do
    run "sh -c 'cd #{release_path} && /usr/local/bin/composer install'"
  end
  
end



