FROM debian:stable-20190122-slim

LABEL "maintainer"="Stephan Hoogland <stephan@shoogland.com>"
LABEL "repository"="http://github.com/shoogland/sftp-action"
LABEL "homepage"="https://github.com/shoogland"

LABEL "com.github.actions.name"="Sftp Deploy"
LABEL "com.github.actions.description"="Deploy to a remote server with sftp."
LABEL "com.github.actions.icon"="upload-cloud"
LABEL "com.github.actions.color"="blue"

RUN apt-get update && \ 
apt-get install -y \ 
sshpass && \ 
rm -rf /var/lib/apt/lists/*

ADD entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh"]
