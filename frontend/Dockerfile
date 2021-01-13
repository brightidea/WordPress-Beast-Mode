FROM node:alpine
ENV PORT 3000

# Create app directory
RUN mkdir -p app
RUN apk add --no-cache libc6-compat

WORKDIR /app

# Installing dependencies
COPY package*.json ./
COPY next.config.js ./
COPY postcss.config.js ./
COPY tailwind.config.js ./

ENV API_URL "http://api:8080/graphql"
ENV NODE_ENV "dev"

RUN npm install
COPY . .

EXPOSE 3000
EXPOSE 9229

# Running the app
CMD "npm" "run" "dev"