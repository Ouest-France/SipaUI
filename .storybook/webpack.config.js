const path = require("path");
const fs = require("fs");

var components_dir = __dirname + '/../src/components/';
// Pour chaque component
prout = fs.readdirSync(components_dir);


// Export a function. Accept the base config as the only param.
module.exports = (storybookBaseConfig, configType) => {
  // configType has a value of 'DEVELOPMENT' or 'PRODUCTION'
  // You can change the configuration based on that.
  // 'PRODUCTION' is used when building the static version of storybook.

  // Make whatever fine-grained changes you need
  // storybookBaseConfig.module.rules.push({
  //   test: /\.scss$/,
  //   loaders: ["style-loader", "css-loader", "sass-loader"],
  //   include: path.resolve(__dirname, "../src/core/scss/")
  // });

  storybookBaseConfig.node = {
    fs: 'empty'
  }

  storybookBaseConfig.module.rules.push({
    test: /\.(gif|png|jpe?g|svg)$/i,
    use: [
      'file-loader',
      {
        loader: 'image-webpack-loader',
        options: {
          bypassOnDebug: true, // webpack@1.x
          disable: true, // webpack@2.x and newer
        },
      },
    ],
  });

  console.log('##########################');
  // console.log(storybookBaseConfig);
  console.log(storybookBaseConfig.module.rules);
  console.log('##########################');
  // Return the altered config
  return storybookBaseConfig;
};
