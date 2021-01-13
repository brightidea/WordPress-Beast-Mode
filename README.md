# WP Beast Mode
A Beastly Starting point for your next Headless WordPress + React Project.

A boilerplate that makes it quick and easy to spin up a headless WordPress project leveraging [Docker](https://www.docker.com/), [traefik](https://traefik.io/) (proxy + local SSL), [Apache](https://Apache.org/), [Redis](https://redis.io/) (Cache), [WordPress](https://wordpress.org), [WPGraphQL](https://www.wpgraphql.com/)) & [next.js](https://nextjs.org/) (Frontend).


## Configuration

## Step 1: Setup Your Dev Domain

You need to setup a subdomain of a real TLD domain. We use "local.wpbeastmode.com" for this project. You will need to own the domain you use in order to add DNS entries and authenticate w/ your provider to create the SSL Certificate. I prefer Cloudflare as my DNS host and its FREE! You can see a list of other DNS providers here https://doc.traefik.io/traefik/https/acme/#providers. 

Add "A" Records on your DNS Provider for each Subdomain pointing to "127.0.0.1". 


## Step 2: Create your .env file

There are a number of additional environment variables that need to be updated to get things working properly. 


## Step 3: 
Run the following command from the root of the project folder.

```
docker-compose up
```


## Credits
Ultimately this boilerplate is a pre-configuration of a lot of existing technologies and frameworks. Standing on the shoulders of giants here. 


[Docker](https://www.docker.com/) Makes it easy to spin up the various micro services like [WordPress](https://wordpress.org) (with [WPGraphQL](https://www.wpgraphql.com/)), [next.js](https://nextjs.org/), [traefik](https://traefik.io/), [Apache](https://apache.org/) and [Redis](https://redis.io/). 

I took a lot of direction on the frontend from the official [Next.js + WordPress example](https://github.com/vercel/next.js/tree/canary/examples/blog-starter). 

I took a lot of inspiration for the Authentication from my friend Lougie Quisel's [WordPress + React.js + TypeScript repo](https://github.com/loq24/wp-react-typescript). [WIP]



## To-Do & In Progress
My long term goal is to provide a complete turn-key solution for dev to production deployment. 

- Implement a Gutenberg Parsing Component [IN PROGRESS]
- Create example Gutenberg Patterns [IN PROGRESS]
- Add Authentication w/ User Profile Dashboard when Logged in.
- Setup CI/CD workflow template.
- Add Production deployment templates for Digital Ocean & AWS



