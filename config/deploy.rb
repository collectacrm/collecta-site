set :application, "collecta"
set :repository, '_site'
set :scm, :none


role :web, "collecta.co.uk"                          # Your HTTP server, Apache/etc
set :user, "collecta"

set  :deploy_via, :copy
set :copy_compression, :gzip
set :use_sudo, false
# the path to deploy to on your VPS
set :deploy_to, "/home/#{user}/site"

before 'deploy:update', 'deploy:update_jekyll'

namespace :deploy do
  [:start, :stop, :restart, :finalize_update].each do |t|
    desc "#{t} task is a no-op with jekyll"
    task t, :roles => :app do ; end
  end

  desc 'Run jekyll to update site before uploading'
  task :update_jekyll do
    # clear existing _site
    # build site using jekyll
    # remove Capistrano stuff from build
    %x(rm -rf _site/* && jekyll build && rm _site/Capfile && rm -rf _site/config)
  end
end
