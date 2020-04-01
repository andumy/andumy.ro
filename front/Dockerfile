# base image
FROM node:alpine

# set working directory
WORKDIR /app

#copy config files
COPY package*.json ./

# # install and cache app dependencies
RUN npm install
RUN npm install react-scripts 

# # start app
CMD npm start
