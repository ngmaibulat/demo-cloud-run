FROM nginx:latest

COPY nginx.conf.template /etc/nginx/nginx.conf.template
COPY public /usr/share/nginx/html

VOLUME /usr/share/nginx/html
VOLUME /etc/nginx

ENV PORT 8080
ENV HOST 0.0.0.0
ENV NODE_ENV production

EXPOSE 8080

CMD ["nginx", "-g", "daemon off;"]
