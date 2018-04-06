pipeline {
  agent any
  stages {
    stage('git push') {
      steps {
        git(url: 'https://github.com/Duran914/ZTech', branch: 'master')
      }
    }
    stage('Tests') {
      steps {
        cbtSeleniumTest(operatingSystem: 'Windows', browser: 'Chrome', resolution: '400x600')
      }
    }
  }
}