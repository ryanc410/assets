#----------------------------#
#      Custom Aliases        #
#----------------------------#
alias s='sudo'
alias c='clear'
alias update='sudo apt update && sudo apt upgrade -y'
alias install="sudo apt install $1 -y"

alias enable="sudo systemctl enable $1"
alias start="sudo systemctl start $1"
alias restart="sudo systemctl restart $1"
alias reload="sudo systemctl reload $1"
alias status="sudo systemctl status $1"
alias stop="sudo systemctl stop $1"

alias web='cd /var/www/html'
alias css='cd /var/www/html/assets/css'
alias js='cd /var/www/html/assets/js'
alias inc='cd /var/www/html/assets/inc'
alias vhosts='cd /etc/apache2/sites-available'
alias phpdir='cd /etc/php/*.*/apache2'

alias log='sudo tail /var/log/apache2/*-error.log'
alias listening='lsof -iTCP -sTCP:LISTEN -n -P +c0'
alias passgen="openssl rand -base64 $1"

#------------------------------#
#      Custom PS1 Prompt       #
#------------------------------#

PS1='\[\e[92m\]\u\[\e[38;5;51m\]@\[\e[0m\]\h\[\e[38;5;44m\][\[\e[38;5;51m\]\w\[\e[92m\]]\[\e[0m\]>:'

#-------------------------#
#      User Functions     #
#-------------------------#
function cheat(){
    curl cheat.sh/"$1"
    if [[ $? -ne 0 ]]; then
        echo -e "\e[1;31mError: Could not find the specified cheat sheet!\e[0m"
    sleep 3
    exit 1
    fi
}

function extract(){
    if [ -f $1 ] ; then
        case $1 in
            *.tar.bz2)   tar xvjf $1     ;;
            *.tar.gz)    tar xvzf $1     ;;
            *.bz2)       bunzip2 $1      ;;
            *.rar)       unrar x $1      ;;
            *.gz)        gunzip $1       ;;
            *.tar)       tar xvf $1      ;;
            *.tbz2)      tar xvjf $1     ;;
            *.tgz)       tar xvzf $1     ;;
            *.zip)       unzip $1        ;;
            *.Z)         uncompress $1   ;;
            *.7z)        7z x $1         ;;
            *)           echo "'$1' cannot be extracted via >extract<" ;;
        esac
    else
        echo "'$1' is not a valid file!"
    fi
}
