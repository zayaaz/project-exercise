# Git operation automatization
## ----------------------------------------------------------------------
## Created for automatize git commands.
## ----------------------------------------------------------------------
.DEFAULT_GOAL := push
# Git push with default message
push:
    git add -A
    git commit -m 'Update'
    git push
# Git push with default message
pushMessage:
    git add -A
    git commit -m '$m'
    git push
# Merge into test branch with squash options
mergeDev:
    git checkout test
    git pull
    git merge $b --squash
# Merge into development branch with squash options
mergeTest:
    git checkout development
    git pull
    git merge $b --squash
# Get new updates from test branch into the feature branch
updateTest:
    git checkout test
    git pull
    git checkout $b
    git merge test
# Get new updates from development branch into the feature branch
updateDevelopment:
    git checkout development
    git pull
    git checkout $b
    git merge development