-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-12-2017 a las 23:00:55
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gissac_customers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cli_global`
--

CREATE TABLE `cli_global` (
  `id` int(11) NOT NULL,
  `ruc_int` varchar(11) NOT NULL,
  `ruc_usu` varchar(11) NOT NULL,
  `razon_social_usu` varchar(30) NOT NULL,
  `nombres_usu` varchar(40) NOT NULL,
  `correo_usu` varchar(40) NOT NULL,
  `tel_usu` varchar(12) NOT NULL,
  `direccion_usu` varchar(60) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `cuenta_creada` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cli_global`
--

INSERT INTO `cli_global` (`id`, `ruc_int`, `ruc_usu`, `razon_social_usu`, `nombres_usu`, `correo_usu`, `tel_usu`, `direccion_usu`, `producto`, `descripcion`, `cuenta_creada`) VALUES
(15, '99999999999', '11111111111', 'Telefonica Peru S.A.C.', 'Juan Silva', 'juan@telefonica.com.pe', '51987456321', 'Av. Arequipa # 1109', 'Network Performance Monitor', 'Para 100 equipos', '2017-08-24 14:21:26'),
(16, '99999999999', '11112222222', 'GMD', 'Juan Silva', 'contacto@gmd.com', '51987654455', 'Av. Javier Prado # 6564', 'Network Configuration Manager', '100 licencias ', '2017-10-30 17:27:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gis_iboss`
--

CREATE TABLE `gis_iboss` (
  `id` int(11) NOT NULL,
  `marcaFull` varchar(30) NOT NULL,
  `moduloCat` varchar(60) NOT NULL,
  `moduloShort` varchar(10) NOT NULL,
  `moduloFull` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gis_iboss`
--

INSERT INTO `gis_iboss` (`id`, `marcaFull`, `moduloCat`, `moduloShort`, `moduloFull`) VALUES
(23, 'Iboss', 'Administración de Contenido Web', 'CTW', 'Control de Trafico Web');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gis_inf`
--

CREATE TABLE `gis_inf` (
  `id` int(11) NOT NULL,
  `nameShort` varchar(20) NOT NULL,
  `nameFull` varchar(150) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gis_inf`
--

INSERT INTO `gis_inf` (`id`, `nameShort`, `nameFull`, `contact`) VALUES
(602, 'GIS S.A.C', 'Global Investment Solutions S.A.C', 'http://www.gis-sac.com/contactos/formulario.html');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gis_portal`
--

CREATE TABLE `gis_portal` (
  `id` int(11) NOT NULL,
  `marcaFull` varchar(50) NOT NULL,
  `moduloCat` varchar(60) NOT NULL,
  `moduloShort` varchar(20) NOT NULL,
  `moduloFull` varchar(80) NOT NULL,
  `subTitulo` varchar(200) NOT NULL,
  `periodo` varchar(5) NOT NULL,
  `downSolar` varchar(100) NOT NULL,
  `moduloSo` varchar(80) NOT NULL,
  `moduloRam` varchar(10) NOT NULL,
  `moduloDiscoDuro` varchar(10) NOT NULL,
  `moduloProcesador` varchar(40) NOT NULL,
  `moduloBaseDatos` varchar(150) NOT NULL,
  `moduloServerWeb` varchar(20) NOT NULL,
  `moduloFrameNet` varchar(20) NOT NULL,
  `video` varchar(300) NOT NULL,
  `cTit` varchar(250) NOT NULL,
  `cCon` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gis_portal`
--

INSERT INTO `gis_portal` (`id`, `marcaFull`, `moduloCat`, `moduloShort`, `moduloFull`, `subTitulo`, `periodo`, `downSolar`, `moduloSo`, `moduloRam`, `moduloDiscoDuro`, `moduloProcesador`, `moduloBaseDatos`, `moduloServerWeb`, `moduloFrameNet`, `video`, `cTit`, `cCon`) VALUES
(1, 'Solarwinds', 'Administración de Redes', 'NPM', 'Network Performance Monitor', 'Reduzca los cortes de red y mejore el rendimiento con software de monitoreo de red avanzado', '30', 'http://www.solarwinds.com/es/network-performance-monitor/registration', 'Windows Server 2012, 2012 R2, 2016', '6GB', '60GB', 'Quad Core o Superior', 'SQL server 2012, 2012 SP1, 2012 SP2, 2012 SP3 o 2016', 'IIS v 7.5 o Superior', 'Framework .Net 4.6.2', '//play.vidyard.com/8sNCAemHE65ayKDx3sc2jF.html?v=3.1.1;//play.vidyard.com/G4TVFf8UZ1sKqtf2EG4NXy.html?v=3.1.1;//play.vidyard.com/CUQRneE6Zx76FC6Zcpi79t.html?v=3.1.1;//play.vidyard.com/oLu2Xgdu8ixeY5NE7xKLT3.html?v=3.1.1', 'Simplicidad nunca vista;Completamente escalable;Lo que necesita, cuando lo necesite;Visualización de rutas críticas', 'Monitor de red potente e intuitivo, para que pueda empezar a solucionar los problemas sin demoras;El monitoreo de red listo para usar se adapta para gestionar el crecimiento de su organización hoy y en el futuro;Diseñe NPM según sus necesidades con compatibilidad con varios proveedores, paneles personalizables, vistas y cuadros;Hemos trabajado como ingenieros de sistemas y redes, por lo que comprendemos sus problemas y sabemos cómo resolverlos'),
(2, 'Solarwinds', 'Administración de Redes', 'NTA', 'NetFlow Traffic Analyzer', 'Software de monitoreo del ancho de banda y analizador del tráfico de red', '', 'http://www.solarwinds.com/es/netflow-traffic-analyzer/registration', 'Windows Server 2012, 2012 R2, 2016', '4GB', '20GB', '3GHz Procesador Dual o Superior', 'SQL server 2012, 2012 SP1, 2012 SP2, 2012 SP3 o 2016', '', '', '//play.vidyard.com/XAdrbADh69Z9xPywyDwhc1.html?v=3.1.1', '', ''),
(3, 'Solarwinds', 'Administración de Redes', 'NCM', 'Network Configuration Manager', 'Administración de cumplimiento y configuración automática de redes', '', 'http://www.solarwinds.com/es/network-configuration-manager/registration', 'Windows Server 2012, 2012 R2, 2016', '3GB', '20GB', '3GHz Procesador Dual o Superior', 'SQL server 2012, 2012 SP1, 2012 SP2, 2012 SP3 o 2016', '', 'Framework .Net 4.6.2', '', '', ''),
(4, 'Solarwinds', 'Administración de Redes', 'IPAM', 'IP Address Manager', 'Ahorre tiempo y prevenga los errores costosos con software de gestión de direcciones IP económico y fácil de usar.', '', 'http://www.solarwinds.com/es/ip-address-manager/registration', 'Windows Server 2012, 2012 R2, 2016', '8GB', '20GB', '3GHz Procesador Dual o Superior', 'SQL server 2012, 2012 SP1, 2012 SP2, 2012 SP3 o 2016', '', '', '', '', ''),
(5, 'Solarwinds', 'Administración de Redes', 'UDT', 'User Device Tracker', 'Localice usuarios y dispositivos en su red', '', 'http://www.solarwinds.com/es/user-device-tracker/registration', 'Windows Server 2012, 2012 R2, 2016', '4GB', '20GB', '3GHz Procesador Dual o Superior', 'SQL server 2012, 2012 SP1, 2012 SP2, 2012 SP3 o 2016', '', '', '', '', ''),
(6, 'Solarwinds', 'Administración de Redes', 'VNQM', 'VoIP & Network Quality Manager', 'Adquiera una profunda comprensión de las métricas de QoS de llamadas críticas y el rendimiento de WAN', '', 'http://www.solarwinds.com/es/voip-network-quality-manager/registration', 'Windows Server 2012, 2012 R2, 2016', '3GB', '20GB', '3 GHz Procesador Dual o Superior', 'SQL server 2012, 2012 SP1, 2012 SP2, 2012 SP3 o 2016', '', 'Framework .Net 4.6.2', '', '', ''),
(7, 'Solarwinds', 'Administración de Redes', 'LEM', 'Log & Event Manager', 'Software de administración del registro para obtener seguridad, cumplimiento, y detección y solución de problemas', '', 'http://www.solarwinds.com/es/log-event-manager/registration', 'Máquina Virtual (VMware o Hyper-V)', '8GB', '250GB', '2GHz Procesador Dual o Superior', 'SQL server 2012, 2012 SP1, 2012 SP2, 2012 SP3 o 2016', '', 'Framework .Net 4.6.2', '', '', ''),
(8, 'Solarwinds', 'Administración de Redes', 'ETS', 'Engineer\'s Toolset', 'Más de 60 herramientas imprescindibles de detección y solución de problemas y de diagnóstico de red', '', 'http://www.solarwinds.com/es/engineers-toolset/registration', 'Windows Server 2012, 2012 R2, 2016 o Windows 7, 8, 8.1, 10', '4GB', '10GB', '2GHz Procesador Dual o Superior', 'SQL server 2012, 2012 SP1, 2012 SP2, 2012 SP3 o 2016 (Orion Web)', '', '', '', '', ''),
(9, 'Solarwinds', 'Administración de Redes', 'NTM', 'Network Topology Mapper', 'Planifique su red automáticamente en cuestión de minutos con software de asignación de red', '', 'http://www.solarwinds.com/es/network-topology-mapper/registration', 'Windows Server 2012, 2012 R2, 2016 Windows 7, 8, 8.1, 10', '1GB', '10GB', '2.66GHz Procesador Dual o Superior', '', '', 'Framework .Net 4.6.2', '', '', ''),
(10, 'Solarwinds', 'Administración de Redes', 'Kiwi CT', 'Kiwi CatTools', 'Software potente de administración de automatización y configuración de red', '', 'http://www.solarwinds.com/es/kiwi-cattools/registration', 'Windows Server 2012, 2012 R2, 2016 o Windows 7, 8, 8.1, 10', '1GB', '10GB', '2GHz Procesador Dual o Superior', '', '', 'Framework .Net 3.5', '', '', ''),
(11, 'Solarwinds', 'Administración de Redes', 'Kiwi Syslog', 'Kiwi Syslog Server', 'Centralice y simplifique la administración de mensajes de registro en los dispositivos y servidores de la red', '', 'http://www.solarwinds.com/es/kiwi-syslog-server/registration', 'Windows Server 2012, 2012 R2, 2016 o Windows 7, 8, 8.1, 10', '1GB', '10GB', '1.2GHz Procesador Dual o Superior', 'SQL Compact Edition 4GB libres o Superior', '', 'Framework .Net 3.5', '', '', ''),
(12, 'Solarwinds', 'Administración de Sistemas', 'SAM', 'Server & Application Monitor', 'Descubra y resuelva los problemas de las aplicaciones antes de que se conviertan en incidentes', '', 'http://www.solarwinds.com/es/server-application-monitor/registration', 'Windows Server 2012, 2012 R2, 2016', '8GB', '20GB', 'Quad Core o Superior', 'SQL server 2012, 2012 SP1, 2012 SP2, 2012 SP3 o 2016', '', '', '', '', ''),
(13, 'Solarwinds', 'Administración de Sistemas', 'VM', 'Virtualization Manager', 'Optimice el desempeño y repare problemas de vSphere y Hyper-V en minutos', '', 'http://www.solarwinds.com/es/virtualization-manager/registration', 'Windows Server 2012, 2012 R2, 2016', '8GB', '20GB', '3GHz Procesador Dual o Superior', 'SQL server 2012, 2012 SP1, 2012 SP2, 2012 SP3 o 2016', '', '', '', '', ''),
(14, 'Solarwinds', 'Administración de Sistemas', 'SRM', 'Storage Resource Monitor', 'Monitoreo de la capacidad y el rendimiento del almacenamiento de varios proveedores', '', 'http://www.solarwinds.com/es/storage-resource-monitor/registration', '', '', '', '', '', '', '', '', '', ''),
(15, 'Solarwinds', 'Administración de Sistemas', 'WPM', 'Web Performance Monitor', 'Monitoreo exhaustivo del desempeño de aplicaciones web y SaaS', '', 'http://www.solarwinds.com/es/web-performance-monitor/registration', 'Windows Server 2012, 2012 R2, 2016', '3GB', '20GB', '2.4GHz Procesador Dual o superior', 'SQL server 2012, 2012 SP1, 2012 SP2, 2012 SP3 o 2016', '', 'Framework .Net 4.6.2', '', '', ''),
(16, 'Solarwinds', 'Seguridad de TI', 'PM', 'Patch Manager', 'Software intuitivo de administración de parches para tratar rápidamente las vulnerabilidades del software', '', 'http://www.solarwinds.com/es/patch-manager/registration', 'Windows Server 2012, 2012 R2, 2016', '4GB', '20GB', '3GHz Procesador Dual', 'SQL server 2012, 2012 SP1, 2012 SP2, 2012 SP3, 2014, 2014 SP1 o 2016', '', 'Framework .Net 3.5', '', '', ''),
(17, 'Solarwinds', 'Seguridad de TI', 'SU-MFT', 'Serv-U Managed File Transfer Server', 'Mejore la seguridad y el control de las transferencias de archivos dentro y fuera de su organización', '', 'http://www.solarwinds.com/es/serv-u-managed-file-transfer-server/registration', 'Windows Server 2012, 2012 R2, 2016', '1GB', '120GB', '2GHz Procesador Dual', 'PostgreSQL 9.5 | MySQL 5.7 | SQL Server 2012, 2012 SP2, 2016', '', '', '', '', ''),
(18, 'Solarwinds', 'Servicio Técnico', 'WHD', 'Web Help Desk', 'Software asequible de administración de activos y control de tickets del servicio de asistencia', '', 'http://www.solarwinds.com/es/help-desk-software/registration', 'Windows Server 2012, 2012 R2, 2016', '3GB', '20GB', '2GHz Procesador Dual o superior', 'PostgreSQL 9.2, 9.3.2, 9.4, 9.6 | MySQL 5.6, 5.7 | SQL Server 2012 SP2, 2014, 2016', '', 'Framework .Net 4.6.2', '', '', ''),
(19, 'Solarwinds', 'Servicio Técnico', 'DRS', 'DameWare Remote Support', 'Herramientas de control remoto y de administración de sistemas en un paquete fácil de usar', '', 'http://www.solarwinds.com/es/remote-support-software/registration', 'Windows Server 2012, 2012 R2, 2016 o Windows 7, 8, 8.1, 10', '1GB', '10GB', '1GHz Procesador Dual o superior', '', '', '', '', '', ''),
(20, 'Solarwinds', 'Servicio Técnico', 'DMRC', 'Dameware Mini Remote Control', 'Software de control remoto asequible para todas las necesidades de soporte al cliente y del servicio de ayuda.', '', 'http://www.solarwinds.com/es/dameware-mini-remote-control/registration', 'Windows Server 2012, 2012 R2, 2016 o Windows 7, 8, 8.1, 10', '1GB', '10GB', '1GHz Dual Core o superior', '', '', '', '', '', ''),
(21, 'Solarwinds', 'Servicio Técnico', 'MA', 'Mobile Admin', 'Simplifique la administración y administración de TI desde su dispositivo móvil', '', 'http://www.solarwinds.com/es/mobile-admin/registration', 'Windows Server 2012, 2012 R2, 2016', '2GB', '20GB', '2.66GHz Dual Core', '', '', 'Framework .Net 4.0', '', '', ''),
(22, 'Solarwinds', 'Administración de Bases de Datos', 'DPA', 'Database Performance Analyzer', 'Monitoreo, análisis y ajuste del desempeño de las bases de datos y de las consultas SQL', '', 'http://www.solarwinds.com/es/database-performance-analyzer/registration', 'Windows Server 2012, 2012 R2, 2016 o Linux o Solaris', '4GB', '10GB', '2GHz Procesador Dual', 'Oracle 11.2, 12.1\n| MySQL 5.6.1, 5.7.9\n| Azure SQL V12\n| SQL Server 2012 SP3, 2014 SP2, 2016 SP1\n', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `int_global`
--

CREATE TABLE `int_global` (
  `ruc_int` varchar(11) NOT NULL,
  `razon_social_int` varchar(80) NOT NULL,
  `correo_int` varchar(60) NOT NULL,
  `tel_int` varchar(12) NOT NULL,
  `url_int` varchar(60) NOT NULL,
  `estado_int` varchar(30) NOT NULL,
  `puesto_res` varchar(60) NOT NULL,
  `nombre_res` varchar(60) NOT NULL,
  `apellidos_res` varchar(40) NOT NULL,
  `correo_res` varchar(50) NOT NULL,
  `tel_res` varchar(12) NOT NULL,
  `password_res` varchar(30) NOT NULL,
  `cuenta_creada` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `int_global`
--

INSERT INTO `int_global` (`ruc_int`, `razon_social_int`, `correo_int`, `tel_int`, `url_int`, `estado_int`, `puesto_res`, `nombre_res`, `apellidos_res`, `correo_res`, `tel_res`, `password_res`, `cuenta_creada`) VALUES
('88888888888', 'Claro', 'ventasclaro@claro.com', '51767889888', 'www.claro.com.pe', 'Lima', 'TI', 'Jose', 'Gutierres', 'jgutierres', '51988778776', '123456.', '2017-10-30 17:30:37'),
('99999999999', 'Global S.A.C', 'contactos@gis-sac.com', '51987456321', 'www.gis-sac.com', 'Callao', 'Soporte Tecnico', 'Eduardo', 'Requelme', 'erequelme@gis-sac.com', '51987452362', '123.', '2017-08-24 14:17:09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cli_global`
--
ALTER TABLE `cli_global`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gis_iboss`
--
ALTER TABLE `gis_iboss`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gis_inf`
--
ALTER TABLE `gis_inf`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gis_portal`
--
ALTER TABLE `gis_portal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `moduShort` (`moduloShort`);

--
-- Indices de la tabla `int_global`
--
ALTER TABLE `int_global`
  ADD PRIMARY KEY (`ruc_int`),
  ADD UNIQUE KEY `razon_social_int` (`razon_social_int`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cli_global`
--
ALTER TABLE `cli_global`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `gis_iboss`
--
ALTER TABLE `gis_iboss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `gis_inf`
--
ALTER TABLE `gis_inf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=603;

--
-- AUTO_INCREMENT de la tabla `gis_portal`
--
ALTER TABLE `gis_portal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
