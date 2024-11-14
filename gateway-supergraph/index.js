const { ApolloServer } = require("apollo-server");
const { ApolloGateway, IntrospectAndCompose } = require("@apollo/gateway");

const start = async () => {
  const server = new ApolloServer({
    gateway: new ApolloGateway({
      supergraphSdl: new IntrospectAndCompose({
        subgraphs: [
          { name: "accounts", url: "http://127.0.0.1:8000/graphql" },
          { name: "customers", url: "http://127.0.0.1:8001/graphql" },
        ],
      }),
    }),
  });

  server.listen(process.env.PORT).then(({ url }) => {
    console.log(`Gatway running at ${url}`);
  });
};

start();
