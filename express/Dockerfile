FROM node:19-alpine

# Set the working directory to /app
WORKDIR /app

# Copy package.json and package-lock.json to the container
COPY package.json ./

# Install dependencies
RUN npm install

# Copy the rest of the application code to the container
COPY ./dist /app/dist/

# Expose the port that the application listens on
EXPOSE 8080

ENV NODE_ENV production

# Set the command to start the application
CMD ["npm", "start"]
