FROM nginx:latest
RUN apt update
RUN apt install php libapache2-mod-php php-mysql -yf
WORKDIR /usr/share/nginx/html/
RUN rm -rf index.html
COPY . .
EXPOSE 80
