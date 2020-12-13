
# Guard against intermittent Travis CI DNS outages
for host in distfiles.macports.org dl.bintray.com github.com packages.macports.org packages-private.macports.org rsync-origin.macports.org 0.us.pool.ntp.org; do
    dig +short "$host" | sed -n '$s/$/ '"$host/p" | sudo tee -a /etc/hosts >/dev/null
done

OS_MAJOR=$(uname -r | cut -f 1 -d .)

# Force NTP sync: VM clock might be behind
# https://trac.macports.org/ticket/58800
if [ ${OS_MAJOR} -ge 18 ]
    then
        sudo sntp -sS 0.us.pool.ntp.org
    else
        sudo ntpdate -vu 0.us.pool.ntp.org
fi
