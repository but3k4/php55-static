#
# Interface versions exposed by PHP:
# 
%php_core_api @PHP_APIVER@
%php_zend_api @PHP_ZENDVER@
%php_pdo_api  @PHP_PDOVER@
%php_version  @PHP_VERSION@

%php_extdir    %{_libdir}/php55/modules
%php_ztsextdir %{_libdir}/php55-zts/modules

%php_inidir    %{_sysconfdir}/php55.d
%php_ztsinidir %{_sysconfdir}/php55-zts.d

%php_incldir    %{_includedir}/php55
%php_ztsincldir %{_includedir}/php55-zts

%__php         %{_bindir}/php55
%__ztsphp      %{_bindir}/zts-php55
